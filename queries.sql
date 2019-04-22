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
(name, category_id, price, img, user_id)VALUES ('2014 Rossignol District Snowboard','1','10999','img/lot-1.jpg','1'),

                                               ('DC Ply Mens 2016/2017 Snowboard', '1', '159999', 'img/lot-2.jpg','2'),
                                               ('Крепления Union Contact Pro 2015 года размер L/XL',
                                                '2','8000','img/lot-3.jpg','2'),
                                               ('Ботинки для сноуборда DC Mutiny Charocal', '3','10999','img/lot-4.jpg','3'),
                                               ('Куртка для сноуборда DC Mutiny Charocal','4','7500','img/lot-5.jpg','1'),
                                               ('Маска Oakley Canopy', '6','5400','img/lot-6.jpg', '2');

INSERT INTO bets
( amount, user_id, lot_id)VALUES ('12000', '2', '1'),
                                 ('180000','1', '2'),
                                 ('12000', '3', '5');