/*Find the names (first and last) of all the actors and costumers whose first name is the same as the first name of
the actor with ID 8. Do not return the actor with ID 8 himself. Note that you cannot use the name of the actor
with ID 8 as a constant (only the ID). There is more than one way to solve this question, but you need to
provide only one solution.*/


SELECT 'customer',c.first_name,c.last_name
from customer c
where c.first_name =(select first_name from actor where actor_id = 8)
UNION
SELECT 'actor',a.first_name,a.last_name
from actor a
where a.first_name =(select first_name from actor where actor_id = 8) and a.actor_id <>8;