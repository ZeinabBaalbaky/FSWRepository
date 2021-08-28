
----Get the total and average values of rentals per month per year per store---
SELECT 'average per year',AVG( rental_id),CAST(EXTRACT(YEAR FROM rental_date) AS NCHAR)
from rental
GROUP by CAST(EXTRACT(YEAR FROM rental_date) AS NCHAR)
UNION
SELECT 'sum per year',SUM(rental_id),CAST(EXTRACT(YEAR FROM rental_date) AS NCHAR)
from rental
GROUP by EXTRACT(YEAR FROM rental_date)
UNION
SELECT 'sum per month',SUM(rental_id),CAST(EXTRACT(MONTH FROM rental_date) AS NCHAR)
from rental
GROUP by CAST(EXTRACT(MONTH FROM rental_date) AS NCHAR)
UNION
SELECT 'average per month',AVG(rental_id),CAST(EXTRACT(MONTH FROM rental_date) AS NCHAR)
from rental
GROUP by CAST(EXTRACT(MONTH FROM rental_date) AS NCHAR)
UNION
SELECT 'sum per store',SUM(r.rental_id),CAST(s.store_id AS NCHAR)
from rental r,staff s
where r.staff_id =s.staff_id
GROUP by CAST(s.store_id AS NCHAR)
UNION
SELECT 'average per store',AVG(r.rental_id),CAST(s.store_id AS NCHAR)
from rental r,staff s
where r.staff_id =s.staff_id
GROUP by CAST(s.store_id AS NCHAR);