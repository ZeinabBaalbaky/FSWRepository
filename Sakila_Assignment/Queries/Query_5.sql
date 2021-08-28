
--Return the first and last names of actors who played in a film involving a “Crocodile” and a “Shark”, along with--
--the release year of the movie, sorted by the actors’ last names--


SELECT a.first_name, a.last_name, f.release_year, f.title 
FROM film f ,film_actor fa,actor a
WHERE f.film_id = fa.film_id and fa.actor_id=a.actor_id and f.description LIKE "%Crocodile%" AND description LIKE "%Shark%"
ORDER BY a.last_name;