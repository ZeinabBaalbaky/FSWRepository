
---Get the top 3 customers who rented the highest number of movies within a given year--

select customer_id,count(rental_id)
from rental  
where YEAR(rental_date) = '2005'
GROUP by customer_id
order by count(rental_id) DESC
LIMIT 3;