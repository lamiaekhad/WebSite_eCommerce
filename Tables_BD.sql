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
pic1 varchar(250) not null,
pic2 varchar(250) not null,
FKsurproduit int not null,
primary Key (idpic),
foreign key (FKsurproduit) references produit(id)
);

Create table utilisateur(
iduser int NOT NULL AUTO_INCREMENT,
Nom varchar(25) NOT NULL,
prenom varchar(35) NOT NULL,
nomutilisateur varchar(35) not null,
courriel varchar(50)not null,
motdepasse varchar(200) not null,
thecount int not null,
verrouiller varchar(30) not null,
administrateur varchar(20) not null,
primary Key (iduser)
);

Create table contact(
idcontact int NOT NULL AUTO_INCREMENT,
Nomcontact varchar(25) NOT NULL,
usernameContact varchar(35) not null,
courriel varchar(50)not null,
sujet varchar(50) NOT NULL,
message varchar(200) not null,
primary Key (idcontact)
);

select * from utilisateur;
select * from contact;
select  count(*) exist from utilisateur where nomutilisateur= 'lamiae5';

select count(*) from utilisateur where nomutilisateur='lamiae5' and motdepasse='1';
delete from utilisateur where iduser=1;

update utilisateur set verrouiller='non' where iduser=2;

insert into images(pic1, pic2,FKsurproduit) values
('Image/canape/canape1.JPG','Image/canape/intermede3.jfif', '3'),
('Image/fauteuil/bubble_fauteuil_pink.jpg','Image/fauteuil/bubble_fauteuil_yelow.jpg','2'),
('Image/fauteuil_2/fauteuil_pers2.jfif','Image/fauteuil_2/fauteuil_pers3.jfif','1');
insert into images(pic1, pic2,FKsurproduit) values
('Image/WOMB/Capture.JPG','Image/WOMB/Womb_Chair_Ottoman_Chatou_Boucle_Caviar_1.jpg','4');
insert into images(pic1, pic2,FKsurproduit) values
('Image/Lucasofa/dx.JPG','Image/Lucasofa/sd.JPG','6');

insert into produit(NomProduit, details , prix , prixdebase , disponible, image , supprimer)
values
('GIRASOL', 'Round dining table with pyramid-like central leg, stained oak veneer 
Top with solid frame with oak veneer and 8 radiant quarters and Central decorative medal in brass.','$ 4 550','$ 6 250','5','Image/fauteuil_2/fauteuil_pers1.jfif','non'),

('BUBBLE','Habillé de tissus. Entièrement capitonné.  Structure sapin massif, multiplis de pin et panneaux de particules. Suspension à sangles élastiques HR.
Fabrication Européenne.','$ 2 770','$ 3 500','8','Image/fauteuil/bubble_fauteuil.jpeg','non'),

('INTERMEDE','Ce produit a été identifié comme éco-conçu par notre outil d’évaluation qualitative élaboré en collaboration avec le FCBA* : 
il a été évalué positivement selon 8 critères correspondants à chaque étape de son cycle de vie. Institut technologique : Forêt, Cellulose, Bois-construction et Ameublement','$ 7 660','$ 9 050','3','Image/canape/intermede1.jfif','non');
insert into produit(NomProduit, details , prix , prixdebase , disponible, image , supprimer)
values
('Womb Chair','The Womb Chair and Ottoman was created after Florence Knoll requested Eero Saarinen design a chair that was "like a basket full of pillows - something she could really curl up in". The set owes much of its popularity to the simple, sweeping structure with indented armrests and movable cushions that enable you to lounge, 
sit upright or slouch, in whichever way you desire.','$ 1 510','$ 2 100','3','Image/WOMB/Capture1.JPG','non');
insert into produit(NomProduit, details , prix , prixdebase , disponible, image , supprimer)
values
('Luca Sofa','This statement sofa is styled with sleek tapered legs and contrasting lines. Luca seamlessly blends traditional design with modern trends using artisan techniques to produce characteristics such as beautiful piping along the edges and gentle tufting on the seat. Padded with a mixture of eco-friendly foam and premium goose feathers to create optimal firmness,
 while cylindrical side cushions add the finishing touch.','$ 2 700','$ 3 530','4','Image/Lucasofa/lucasofa.JPG','non');
 
 insert into produit(NomProduit, details , prix , prixdebase , disponible, image , supprimer)
values
('Sofa luxe','This statement sofa is styled with sleek tapered legs and contrasting lines. Luca seamlessly blends traditional design with modern trends using artisan techniques to produce characteristics such as beautiful piping along the edges and gentle tufting on the seat. Padded with a mixture of eco-friendly foam and premium goose feathers to create optimal firmness,
 while cylindrical side cushions add the finishing touch.','$ 3 700','$ 3 530','4','Image/images/pexels-ismi-fitri-hodijah-10043754.jpg','non');
 
  insert into produit(NomProduit, details , prix , prixdebase , disponible, image , supprimer)
values
('Womby','The Womb Chair and Ottoman was created after Florence Knoll requested Eero Saarinen design a chair that was "like a basket full of pillows - something she could really curl up in". The set owes much of its popularity to the simple, sweeping structure with indented armrests and movable cushions that enable you to lounge, 
sit upright or slouch, in whichever way you desire.','$ 1 510','$ 2 100','3','Image/images/pexels-max-vakhtbovych-6492401.jpg','non');
 
 
 DELETE FROM produit WHERE id=6;
 DELETE FROM images WHERE idpic=5;

select * from produit;
select * from images;

select id, NomProduit, prix, prixdebase, image,details,pic1,pic2
from produit
left join images
on  produit.id = images.FKsurproduit
where supprimer ='non';

select NomProduit, prix, prixdebase, image
from produit
where supprimer ='non';

