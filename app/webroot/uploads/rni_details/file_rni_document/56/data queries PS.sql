DELETE FROM student_enrollment WHERE student_id = (SELECT id FROM student WHERE email = 'sandeep.amberkar@gmail.com');
DELETE FROM student_installment WHERE student_id = (SELECT id FROM student WHERE email = 'sandeep.amberkar@gmail.com');
DELETE FROM student_transaction WHERE student_id = (SELECT id FROM student WHERE email = 'sandeep.amberkar@gmail.com');
DELETE FROM student_material WHERE student_id = (SELECT id FROM student WHERE email = 'sandeep.amberkar@gmail.com');

DELETE FROM student WHERE email = 'sandeep.amberkar@gmail.com';


SELECT installment_amount, installment_date, student_id, first_name, last_name FROM student_installment,student WHERE 
student.id = student_installment.student_id
AND student.email = 'ichhaagarg@gmail.com'

SELECT COUNT(*) AS total, student_id AS student_id FROM student_enrollment WHERE 1
GROUP BY product_id, variant_id, student_id 
HAVING total > 1


/* check for installment date different than payment date */
SELECT student_installment.installment_date, student_transaction.payment_date, student_transaction.* FROM student_installment, student_transaction
WHERE 1 AND 
student_installment.id = student_transaction.student_installment_id AND 
student_installment.installment_date <> student_transaction.payment_date AND 
student_transaction.payment_type <> 'Credit Card'
ORDER BY student_installment.installment_date

SELECT student.email FROM student_installment LEFT JOIN student ON student.id = student_installment.student_id WHERE installment_date = '0000-00-00' 


SELECT * FROM student WHERE id IN (SELECT student_transaction.student_id FROM student_installment, student_transaction
WHERE 1 AND 
student_installment.id = student_transaction.student_installment_id AND 
student_installment.installment_date <> student_transaction.payment_date AND 
student_transaction.payment_type <> 'Credit Card')


/*queries for student with bad installment date */
SELECT student.email FROM student_installment LEFT JOIN student ON student.id = student_installment.student_id WHERE installment_date = '0000-00-00' AND student.lead_type = 'student' ORDER BY student.email

/*queries with student still as lead but with enrollment complete */
SELECT student.id, student.first_name, student.last_name, student.email,student.mobile,product.product_name,variant.name FROM student, student_enrollment
LEFT JOIN product ON student_enrollment.product_id = product.id
LEFT JOIN variant ON student_enrollment.variant_id = variant.id
WHERE lead_type = 'lead' 
AND student.id = student_enrollment.student_id


/* Duplicate material present for students */
SELECT s1.id, s1.student_id, s1.material_id, s1.shipping_type, s1.shipping_date, s1.accepted, s1.track_number FROM student_material s1 
INNER JOIN (SELECT student_id, material_id, COUNT(*) FROM student_material 
GROUP BY student_id, material_id HAVING COUNT(*) > 1) s2
ON s1.student_id = s2.student_id
AND s1.material_id = s2.material_id
ORDER BY student_id, id

/* Students not assigned material */
SELECT student.id, student.first_name, student.email, m . *
FROM `student_enrollment` AS e
INNER JOIN student AS student ON ( student.id = e.student_id )
INNER JOIN variant_material AS v ON ( e.product_id = v.product_id AND e.variant_id = v.variant_id )
LEFT JOIN student_material AS m ON ( student.id = m.student_id )
WHERE m.id IS NULL
GROUP BY student.id
ORDER BY student.id

/* Assign material to Students - Change ID */
INSERT INTO student_material (student_id, student_enroll_id, product_id, variant_id, material_id) 
SELECT student_enrollment.student_id, student_enrollment.id, student_enrollment.product_id, student_enrollment.variant_id, variant_material.material_id FROM student_enrollment, variant_material 
WHERE student_id = 14719
AND student_enrollment.product_id = variant_material.product_id
AND student_enrollment.variant_id = variant_material.variant_id