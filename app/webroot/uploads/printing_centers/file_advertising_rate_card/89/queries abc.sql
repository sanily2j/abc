SELECT membership_letter, membership_number, publication_name, edition, languages.language, frequencies.frequency, certificate_number, salutation, representative_name, 
designation, company_name, address_1, address_2, city, state, pincode, zone, phone_1, phone_2, phone_3, fax_1, fax_2, email 
FROM mem_publishers, languages, frequencies
WHERE mem_publishers.language_id = languages.id 
AND mem_publishers.frequency_id = frequencies.id