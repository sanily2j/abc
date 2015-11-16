SELECT membership_letter, membership_number, publication_name, edition, languages.language, frequencies.frequency, certificate_number, salutation, representative_name, 
designation, company_name, address_1, address_2, city, state, pincode, zone, phone_1, phone_2, phone_3, fax_1, fax_2, email 
FROM mem_publishers, languages, frequencies
WHERE mem_publishers.language_id = languages.id 
AND mem_publishers.frequency_id = frequencies.id



SELECT membermst.Cert_no AS CertNo, membermst.Pub_name AS PubName, `language` AS `Language`, frequency AS Frequency, 
membermst.`type` AS Magazine, IF((membermst.type <> 'MAZ' OR membermst.type IS NULL), 'NP', '') AS Newspaper, membermst.Proprietor, 
CONCAT(REPLACE(addr1, ',', '_'), REPLACE(addr2, ',', '_')) AS Address
FROM membermst 

WHERE membermst.current = 'Y'
AND (centertype = 'SINGLE EDITION' OR centertype = 'MULTI PRINTING CENTRE' OR centertype = 'MULTI EDITION AND PRINTING CENTRE')


SELECT est, RNI FROM 

SELECT * FROM editionmst WHERE cert_no = '7' AND volume = 132



SELECT validmem.CertNo AS CertNo, validmem.PubName AS PubName, validmem.Language AS `Language`,
validmem.Frequency AS Frequency, membermst.`type` AS Magazine, 
IF((membermst.type <> 'MAZ' OR membermst.type IS NULL), 'NP', '') AS Newspaper, 
editionmst_single.est AS Estd,
REPLACE(membermst.Proprietor, ',', '_') AS Proprietor,
editionmst_single.RNIRegNo AS RNI,
CONCAT(REPLACE(membermst.addr1, ',', '_'), REPLACE(membermst.addr2, ',', '_')) AS Address,
combined_yrpt.dispfreq AS Frequency
FROM validmem 
LEFT JOIN membermst ON validmem.CertNo = membermst.Cert_no
LEFT JOIN editionmst_single ON validmem.CertNo = editionmst_single.Cert_no
left join combined_yrpt on validmem.CertNo = combined_yrpt.Cert_no




DELETE FROM editionmst WHERE volume <> 132
CREATE TABLE editionmst_single AS SELECT Cert_no, est, RNIRegNo FROM editionmst
DROP TABLE editionmst_single
TRUNCATE editionmst_single

create unique index with Cert_no

INSERT IGNORE INTO editionmst_single SELECT Cert_no, est, RNIRegNo FROM editionmst
SELECT * FROM editionmst_single

