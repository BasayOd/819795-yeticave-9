USE yeticave;
INSERT INTO categories
(name, icon) VALUES ('Доски и лыжи', 'boards'),('Крепления', 'attachment'),
                   ('Ботинки', 'boots'), ('Одежда', 'clothing'), ('Инструменты', 'tools'), ('Разное', 'other');

INSERT INTO users
(email, name, password, avatar, contact) VALUES  ('basay1980@gmail.com', 'Basay', '198045gh', 'url/urk/lrt', 'привет'),
                                                 ('basay1981@gmail.com', 'Basay1', '198045gh', 'url/urk/lrt', 'привет'),
                                                 ('basay1982@gmail.com', 'Basay2', '198045gh', 'url/urk/lrt', 'привет'),
                                                 ('basay1983@gmail.com', 'Basay3', '198045gh', 'url/urk/lrt', 'привет');


INSERT INTO lots
(name, category_id, price, img, user_id, dt_end, bet_step)VALUES ('2014 Rossignol District Snowboard','1','10999','img/lot-1.jpg','1', '2019-05-05', '500' ),

                                               ('DC Ply Mens 2016/2017 Snowboard', '1', '159999', 'img/lot-2.jpg','2', '2019-05-05','500'),
                                               ('Крепления Union Contact Pro 2015 года размер L/XL',
                                                '2','8000','img/lot-3.jpg','2', '2019-05-05','500'),
                                               ('Ботинки для сноуборда DC Mutiny Charocal', '3','10999','img/lot-4.jpg','3', '2019-05-05','500'),
                                               ('Куртка для сноуборда DC Mutiny Charocal','4','7500','img/lot-5.jpg','1', '2019-05-05','500'),
                                               ('Маска Oakley Canopy', '6','5400','img/lot-6.jpg', '2', '2019-05-05','500');
UPDATE users SET lot_id = '1' WHERE id = '1';
UPDATE users SET lot_id = '2' WHERE id = '2';
UPDATE users SET lot_id = '3' WHERE id = '2';
UPDATE users SET lot_id = '4' WHERE id = '3';
UPDATE users SET lot_id = '5' WHERE id = '1';
UPDATE users SET lot_id = '6' WHERE id = '2';

INSERT INTO bets
( amount, user_id, lot_id)VALUES ('12000', '2', '1');
UPDATE users SET bet_id = '1' WHERE id = '2';
UPDATE lots SET winner_id ='2' WHERE id ='1';

INSERT INTO bets
( amount, user_id, lot_id)VALUES ('180000','1', '2');
UPDATE users SET bet_id = '1' WHERE id = '1';
UPDATE lots SET winner_id ='1' WHERE id ='2';

INSERT INTO bets
( amount, user_id, lot_id)VALUES ('12000', '3', '5');
UPDATE users SET bet_id = '1' WHERE id = '3';
UPDATE lots SET winner_id ='3' WHERE id ='5';


 SELECT * FROM categories;

 SELECT l.name, l.price, l.img, b.amount, c.name FROM lots l 
 LEFT JOIN bets b ON b.lot_id=l.id 
 JOIN categories c ON l.category_id=c.id WHERE l.dt_end>CURRENT_TIMESTAMP;
 
 SELECT * FROM lots WHERE id='2';

UPDATE lots SET name="новое имя лота" WHERE id='2';

SELECT b.create_at, b.amount, u.name FROM bets b
LEFT JOIN lots l ON b.lot_id=l.id
JOIN users u ON b.user_id=u.id WHERE l.id='1' ;
 