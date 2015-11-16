/* Count of user data per operator */
SELECT COUNT(people.id),users.first_name,users.id FROM people, users WHERE
people.created_by = users.id
GROUP BY created_by


SELECT DATE(people.modified) AS modified_date FROM people WHERE created_by = 46 GROUP BY modified_date
SELECT people.modified AS time_out FROM people WHERE created_by = 46 AND DATE(people.modified) = '2015-01-20' ORDER BY time_out ASC LIMIT 1
SELECT people.modified AS time_in FROM people WHERE created_by = 46 AND DATE(people.modified) = '2015-01-20' ORDER BY time_in DESC LIMIT 1
SELECT COUNT(*) FROM people WHERE created_by = 46 AND DATE(people.modified) = '2015-01-20'


/* Transfer records */
UPDATE people SET created_by = 51 WHERE created_by = 52

/* For correcting business details */
SELECT id, first_name, last_name, mobile_number, occupation ,business_name, specialty_business_service, nature_of_business, name_of_business FROM people WHERE business_name <> '' OR specialty_business_service <> ''

/*Case / Space correction */
UPDATE people SET first_name = CONCAT(UCASE(LEFT(first_name, 1)), LCASE(SUBSTRING(first_name, 2)));
UPDATE people SET last_name = CONCAT(UCASE(LEFT(last_name, 1)), LCASE(SUBSTRING(last_name, 2)));
UPDATE address SET city = CONCAT(UCASE(LEFT(city, 1)), LCASE(SUBSTRING(city, 2)))
UPDATE people SET first_name = TRIM(first_name);
UPDATE people SET last_name = TRIM(last_name);

/* For notes */
SELECT people.first_name, people.last_name, people.main_surname, people.mobile_number, people.village, notes.id, notes.`comment`, notes.created, address.* FROM notes, people, address WHERE 
notes.group_id = people.group_id AND tree_level = ''
AND address.id = people.address_id

/*For Trimming spaces */
SELECT id, group_id, first_name, last_name, mobile_number, is_late, main_surname, village, father, mother, f_id, m_id, partner_id, partner_name FROM people WHERE last_name LIKE '% %'

/*For DOB search */
SELECT id, group_id, first_name, last_name, mobile_number, date_of_birth FROM people WHERE (date_of_birth > '2015-00-00'  OR date_of_birth = '1970-01-01') AND is_late = 0 ORDER BY group_id

SELECT * FROM address WHERE suburb <> '' AND state = 'undefined'

UPDATE address SET city = 'Maharashtra' WHERE suburb = 'Mulund' AND state = 'undefined'

SELECT DISTINCT(suburb) FROM address;
SELECT * FROM address WHERE city = 'Mumbai' AND std_code = ''
SELECT * FROM address WHERE state = 'undefined'

SELECT * FROM address WHERE id NOT IN (SELECT address_id FROM people)

SELECT building_name, people_id, COUNT(*),people.first_name, people.last_name FROM address, people WHERE people.address_id = address.id GROUP BY building_name HAVING COUNT(building_name) > 1

SELECT id, group_id, first_name, last_name, mobile_number, is_late, main_surname, village, father, mother, f_id, m_id, partner_id, partner_name FROM people WHERE id = 2571
SELECT id, group_id, first_name, last_name, is_late, main_surname, village, father, mother, f_id, m_id, partner_id, partner_name FROM people WHERE id = 2538

/* Correction of surname */
SELECT last_name, COUNT(*) FROM people WHERE last_name NOT IN (SELECT `name` FROM main_surname) GROUP BY last_name


/* where data is mis-matched */
SELECT p.id, p.first_name, p.group_id, p.m_id, p.f_id, f.partner_id AS Father_partner, m.partner_id AS mother_partner, s.spouse_id AS father_exspouse FROM people p
LEFT JOIN people f ON (f.id = p.f_id)
LEFT JOIN people m ON (m.id = p.m_id)
LEFT JOIN spouses s ON (s.people_id = p.f_id)
WHERE p.m_id !=f.partner_id AND f.partner_id != 0


/*
** people having partner and one of them have date of marriage missing or entered as 1970-01-01
*/
SELECT p.id, p.group_id, p.first_name, p.partner_id, p.date_of_marriage, s.date_of_marriage as spouse_date_of_marriagee FROM people p
LEFT JOIN people s ON (p.partner_id = s.id ) 
WHERE (p.partner_id != 0 && p.partner_id IS NOT NULL) AND (((p.date_of_marriage IS NULL OR p.date_of_marriage = '1970-01-01') AND (s.date_of_marriage IS NOT NULL && s.date_of_marriage != '1970-01-01') ) OR ((s.date_of_marriage IS NULL OR s.date_of_marriage = '1970-01-01') AND (p.date_of_marriage IS NOT NULL && p.date_of_marriage != '1970-01-01')))



/*
** people having partner and either one of them or both have date of marriage missing or entered as 1970-01-01
*/
SELECT p.id, p.group_id, p.first_name, p.partner_id, p.date_of_marriage, s.date_of_marriage as spouse_date_of_marriagee FROM people p
LEFT JOIN people s ON (p.partner_id = s.id ) 
WHERE (p.partner_id != 0 && p.partner_id IS NOT NULL) AND ((p.date_of_marriage IS NULL OR p.date_of_marriage = '1970-01-01') OR (s.date_of_marriage IS NULL OR s.date_of_marriage = '1970-01-01'))



/*
** people having date of marriage > Child's date of birth or missing or entered as 1970-01-01
*/
SELECT DISTINCT p.id, p.group_id, p.first_name, p.partner_id, p.date_of_marriage FROM people p
INNER JOIN people c ON (c.f_id = p.id OR c.m_id = p.id)
WHERE (p.partner_id != 0 && p.partner_id IS NOT NULL) AND 
((p.date_of_marriage IS NOT NULL AND p.date_of_marriage != '1970-01-01' AND p.date_of_marriage > c.date_of_birth) OR p.date_of_marriage = '1970-01-01' OR p.date_of_marriage IS NULL)



/*
** people belonging to same group but having address different than HOF
*/
SELECT p.id, p.group_id, g.id as hof, g.address_id AS hof_address_id, p.address_id, a.building_name, a.address_1, a.suburb, a.city 
FROM people p 
LEFT JOIN people g ON (g.group_id = p.group_id AND g.tree_level = '')
LEFT JOIN address a ON (p.address_id = a.id)
WHERE p.address_id IS NOT NULL AND p.address_id != 0 AND g.address_id IS NOT NULL AND p.address_id != g.address_id



/*
** people belonging to same group and having address missing but hof is having address data 
*/
SELECT p.id, p.group_id, g.id as hof, g.address_id AS hof_address_id, p.address_id, a.building_name, a.address_1, a.suburb, a.city 
FROM people p 
LEFT JOIN people g ON (g.group_id = p.group_id AND g.tree_level = '')
LEFT JOIN address a ON (p.address_id = a.id)
WHERE (p.address_id IS NULL OR p.address_id = 0) AND g.address_id IS NOT NULL AND g.address_id != 0



/*
** Duplicate address
*/
SELECT GROUP_CONCAT(id), `wing`, `room_number`, `building_name`, `complex_name`, `plot_number`, `address_1`, `address_2`, `road`, `cross_road`, `landmark`, `suburb`, `suburb_zone`, `city`
FROM address
GROUP BY `wing`, `room_number`, `building_name`, `complex_name`, `plot_number`, `address_1`, `road`, `cross_road`, `landmark`, `suburb`, `suburb_zone`, `city`
HAVING COUNT(*) > 1