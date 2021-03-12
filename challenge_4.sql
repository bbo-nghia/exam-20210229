CREATE TABLE IF NOT EXISTS Person(Id int, Email varchar(255));
DELETE FROM Person;
INSERT INTO Person(Id, Email) values ('1', 'a@b.com');
insert into Person (Id, Email) values ('2', 'c@d.com');
insert into Person (Id, Email) values ('3', 'a@b.com');

SELECT Email FROM Person 
GROUP BY Email 
HAVING COUNT(Email) > 1
