Create table produit(
id int NOT NULL AUTO_INCREMENT,
NomProduit varchar(60) NOT NULL,
details varchar(2000) NOT NULL,
prix varchar(30) not null,
prixdebase varchar(30),
disponible int not null,
image varchar(250) not null,
supprimer varchar(20) not null,
primary Key (id)
);

create table images(
idpic int not null AUTO_INCREMENT,
pic varchar(250) not null,
FKsurproduit int not null,
primary Key (idimage),
foreign key (FKsurproduit) references produit(id)
);

insert into images(image, FKsurproduit) values
('Image/fauteuil_2/fauteuil_pers1.jfif', '1'),
('Image/canape/canape1.JPG', '2'),
('Image/canape/intermede1.jfif','2');


insert into produit(NomProduit, details , prix , prixdebase , disponible, image , supprimer)
values
('GIRASOL', 'Round dining table with pyramid-like central leg, stained oak veneer 
Top with solid frame with oak veneer and 8 radiant quarters and Central decorative medal in brass.','$ 4 550','$ 6 250','5','Image/fauteuil_2/fauteuil_pers1.jfif','non'),

('BUBBLE','Habillé de tissus. Entièrement capitonné.  Structure sapin massif, multiplis de pin et panneaux de particules. Suspension à sangles élastiques HR.
Fabrication Européenne.','$ 2 770','$ 3 500','8','Image/canape/canape1.JPG','non'),

('INTERMEDE','Ce produit a été identifié comme éco-conçu par notre outil d’évaluation qualitative élaboré en collaboration avec le FCBA* : 
il a été évalué positivement selon 8 critères correspondants à chaque étape de son cycle de vie. Institut technologique : Forêt, Cellulose, Bois-construction et Ameublement','$ 7 660','$ 9 050','3','Image/canape/intermede1.jfif','non');

select * from produit;
select * from images;

select NomProduit, prix, prixdebase, image,FKsurproduit
from produit
right join images
on  produit.id = images.FKsurproduit
where supprimer ='non';

select NomProduit, prix, prixdebase, image
from produit
where supprimer ='non';


Create table utilisateur(
iduser int NOT NULL AUTO_INCREMENT,
Nom varchar(25) NOT NULL,
prenom varchar(35) NOT NULL,
nomutilisateur varchar(35) not null,
courriel varchar(50)not null,
motdepasse varchar(200) not null,
thecount int not null,
verrouiller varchar(30) not null,
primary Key (iduser)
);



select * from utilisateur;
select  count(*) exist from utilisateur where nomutilisateur= 'lamiae5';

select count(*) from utilisateur where nomutilisateur='lamiae5' and motdepasse='1';

update utilisateur set verrouiller='non' where nomutilisateur="coco1" ;



