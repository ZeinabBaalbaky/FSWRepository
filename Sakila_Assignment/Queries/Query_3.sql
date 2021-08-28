-- What are the top 3 countries from which customers are originating? --

from customer C, country CO,address ad,city ci
where C.address_id= ad.address_id and ad.city_id = ci.city_id and ci.country_id = CO.country_id
GROUP by CO.country
ORDER by count(C.customer_id) DESC
LIMIT 3;