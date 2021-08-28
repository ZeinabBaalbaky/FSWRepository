--Find all the film categories in which there are between 55 and 65 films. Return the names of these categories
--and the number of films per category, sorted by the number of films. If there are no categories between 55 and
--65, return the highest available counts.--

SELECT cat.name , COUNT(f.film_id) as Number_of_films
from category cat ,film f, film_category fc
where cat.category_id = fc.category_id and fc.film_id = f.film_id 
GROUP BY cat.name
HAVING 
(CASE WHEN (COUNT( Number_of_films BETWEEN 55 and 65) > 0) then  Number_of_films BETWEEN 55 and 65
      Else Number_of_films =(select MAX(sub.x) from (select count(film_id) as x from film_category GROUP by  category_id)sub)

 END
 )
ORDER BY COUNT(f.film_id);