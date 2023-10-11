BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "users" (
	"id"	INTEGER,
	"name"	TEXT,
	"email"	TEXT,
	"password"	TEXT,
	PRIMARY KEY("id")
);
CREATE TABLE IF NOT EXISTS "books" (
	"id"	INTEGER,
	"title"	TEXT,
	"user"	INTEGER,
	FOREIGN KEY("user") REFERENCES "users"("id"),
	PRIMARY KEY("id")
);
INSERT INTO "users" VALUES (1,'romerito','romerito@romerito','$argon2i$v=19$m=65536,t=4,p=1$ZWVMaWd0bTZhbkxsb3Z2dQ$9KC6IYc/Cn68h6p74e1cAPTyNoHFWvIhRft53ApNt2U');
INSERT INTO "books" VALUES (1,'primeiro livro',1);
INSERT INTO "books" VALUES (2,'segundo livro',1);
INSERT INTO "books" VALUES (3,'terceiro livro',1);
COMMIT;
