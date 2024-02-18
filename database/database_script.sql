create database is not exists pruebaSolati;

use pruebaSolati;


CREATE TABLE public.users
 (
     id serial NOT NULL,
     name character varying NOT NULL,
     last_name character varying NOT NULL,
     email character varying NOT NULL,
     age integer NOT NULL,
     PRIMARY KEY (id)
 );
