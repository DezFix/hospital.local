
CREATE TABLE Persons (
    id int GENERATED BY DEFAULT AS IDENTITY PRIMARY KEY,
	person_name varchar(255),
	diagnosis varchar(255),
	phone varchar(255),
    address varchar(255),
    dateofbirth varchar(255),
	gender varchar(255),
	status varchar(255),
	Id_Doctor int
)