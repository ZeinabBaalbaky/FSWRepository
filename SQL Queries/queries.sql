
--Select all the degrees of all the instructors in this university	  
	  
select i.first_name as name,d.name as degree,m.name as major,u.name as university ,fd.year
from `degrees`  d,`majors` m,`universities` u,`instructors` i,`full_degrees` fd
where fd.instructor_id = i.id and d.id = fd.degree_id
      and m.id=fd.major_id and u.id = fd.university_id;


--Select the first name of the instructors who earned an MS degree in Computer Science
select s.first_name from `instructors` s , `full_degrees` fd, `degrees` d ,`majors` m
where s.id = fd.instructor_id and fd.degree_id = d.id and fd.major_id=m.id and d.name ='MS' and m.name = 'Computer Science';

--Delete all instructors

DELETE FROM `instructors`; --but before deleting from table instructors we have to delete from table full_degrees because table full_degrees 
                           -- has id_instructor FOREIGN KEY which references table `instructors` so we have to execute this query before -->
						   -- DELETE FROM `full_degrees `


--Insert a new record to this table(instructors)
INSERT INTO `instructors`(`first_name`, `last_name`) VALUES ('Zeinab','B');


