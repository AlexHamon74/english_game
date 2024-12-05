-- CREATION DES TABLES --
CREATE TABLE sujet(
    sujet_id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255),
    mission TEXT,
    cible TEXT,
    description TEXT,
    sujet_numero INT
)

CREATE TABLE categorie(
    categorie_id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255)
);

CREATE TABLE carte(
    carte_id INT AUTO_INCREMENT PRIMARY KEY,
    categorie_id INT,
    nom VARCHAR(255),
    image TEXT,
    carte_numero INT,
    sujet1_points INT,
    sujet2_points INT,
    sujet3_points INT,
    sujet4_points INT,
    sujet5_points INT,
    FOREIGN KEY (categorie_id) REFERENCES categorie(categorie_id)
);

-- AJOUT DES SUJETS --
INSERT INTO `sujet` (`sujet_id`, `titre`, `mission`, `cible`, `description`, `sujet_numero`) 
VALUES (NULL, 'Food truck', 'Our visual identity must be appealing and eye-catching at first glance.', "Young adults, urban and active, who like fast food but quality. They're looking for a friendly, original experience, with an emphasis on authentic flavors and accessibility.", 'Colorful and dynamic, the tone should reflect the energy and modernity of the concept. The visual identity should be welcoming, contemporary, and emphasize the artisanal, gourmet aspect of the products.', 4);

INSERT INTO `sujet` (`sujet_id`, `titre`, `mission`, `cible`, `description`, `sujet_numero`) 
VALUES (NULL, 'Startup in new technology\r\n', 'We want a modern corporate identity that reflects our innovation. ', 'Professionals and companies looking for innovative, high-performance technological solutions. They value modernity, reliability and advances that can transform their daily lives or their business.', 'The tone should be modern and dynamic. The visual identity must convey an image of confidence, while highlighting the innovative and accessible aspect of the technologies proposed.', 2);

INSERT INTO `sujet` (`sujet_id`, `titre`, `mission`, `cible`, `description`, `sujet_numero`) 
VALUES (NULL, 'Thrift store', 'We wanted a graphic charter that expressed our vintage spirit and commitment to responsible fashion.', 'Young adults and teenagers who are sensitive to sustainable fashion and unique style. They are looking for original pieces that combine authenticity, creativity and respect for the environment.', 'The tone should emphasize vintage charm with a simple, authentic touch. The visual identity should be reminiscent of bygone eras, while remaining appealing to the target audience.', 5);

INSERT INTO `sujet` (`sujet_id`, `titre`, `mission`, `cible`, `description`, `sujet_numero`) 
VALUES (NULL, 'VR Headset', 'We wanted a graphic design that embodied the futuristic experience of our VR headset.', 'Technophiles, gamers and virtual reality professionals looking for a high-quality immersive experience. They are passionate about new technologies and are looking for products that push the boundaries of digital interaction.', "The visual identity should be elegant and sophisticated, with futuristic visual elements that underline the product's high-tech and revolutionary aspect.", 3);

INSERT INTO `sujet` (`sujet_id`, `titre`, `mission`, `cible`, `description`, `sujet_numero`) 
VALUES (NULL, 'Luxury brand', 'We want a graphic design that reflects the timeless elegance and prestige of our brand.', 'Adults with strong purchasing power, attracted by exclusivity and quality. They look for brands that embody luxury and authenticity.', 'Sophisticated and refined, the tone must convey a discreet elegance. The visual ensemble must inspire prestige and timelessness, while remaining sober and harmonious.', 1);

-- AJOUT DES CATEGORIES --
INSERT INTO `categorie` (`categorie_id`, `name`) 
VALUES (NULL, 'Typographie');

INSERT INTO `categorie` (`categorie_id`, `name`) 
VALUES (NULL, 'Palette de couleur');

INSERT INTO `categorie` (`categorie_id`, `name`) 
VALUES (NULL, 'Logo');

INSERT INTO `categorie` (`categorie_id`, `name`) 
VALUES (NULL, 'Motif, texture');

INSERT INTO `categorie` (`categorie_id`, `name`) 
VALUES (NULL, 'Illustrations, photos');

-- AJOUT DES CARTES
INSERT INTO `carte` (`carte_id`, `categorie_id`, `nom`, `carte_numero`, `image`, `sujet1_points`, `sujet2_points`, `sujet3_points`, `sujet4_points`, `sujet5_points`) 
VALUES 
(NULL, 1, 'Serif Didot', '1', NULL, '5', '4', '3', '2', '1'),
(NULL, 1, 'Geometric sans-serif', '2', NULL, '4', '5', '4', '1', '2'),
(NULL, 1, 'Futuristic (Display)', '3', NULL, '3', '3', '5', '4', '3'),
(NULL, 1, 'Slab Serif', '4', NULL, '2', '1', '1', '3', '5'),
(NULL, 1, 'Handwritten (Manuscrite)', '5', NULL, '1', '2', '2', '5', '4');

INSERT INTO `carte` (`carte_id`, `categorie_id`, `nom`, `carte_numero`, `image`, `sujet1_points`, `sujet2_points`, `sujet3_points`, `sujet4_points`, `sujet5_points`) 
VALUES 
(NULL, 2, 'Palette élégente et raffinée', '6', NULL, '5', '4', '3', '2', '1'),
(NULL, 2, 'Palette innovante et dynamique', '7', NULL, '4', '5', '4', '1', '2'),
(NULL, 2, 'Palette futuriste et immersive', '8', NULL, '3', '3', '5', '4', '3'),
(NULL, 2, 'Palette rétro et nostalgique', '9', NULL, '2', '1', '1', '3', '5'),
(NULL, 2, 'Palette chaleureuse et appétissante', '10', NULL, '1', '2', '2', '5', '4');

INSERT INTO `carte` (`carte_id`, `categorie_id`, `nom`, `carte_numero`, `image`, `sujet1_points`, `sujet2_points`, `sujet3_points`, `sujet4_points`, `sujet5_points`) 
VALUES 
(NULL, 3, 'Logo typographique', '11', NULL, '5', '4', '3', '2', '1'),
(NULL, 3, 'Logo abstrait', '12', NULL, '4', '5', '4', '1', '2'),
(NULL, 3, 'Logo pictographique', '13', NULL, '3', '3', '5', '4', '3'),
(NULL, 3, 'Logo vintage, retro', '14', NULL, '2', '1', '1', '3', '5'),
(NULL, 3, 'Logo illustratif', '15', NULL, '1', '2', '2', '5', '4');

INSERT INTO `carte` (`carte_id`, `categorie_id`, `nom`, `carte_numero`, `image`, `sujet1_points`, `sujet2_points`, `sujet3_points`, `sujet4_points`, `sujet5_points`) 
VALUES 
(NULL, 4, 'Métallique et moderne', '16', NULL, '5', '4', '3', '2', '1'),
(NULL, 4, 'Géométrique abstrait', '17', NULL, '4', '5', '4', '1', '2'),
(NULL, 4, 'Psychédélique', '18', NULL, '3', '3', '5', '4', '3'),
(NULL, 4, 'Florale ou organique', '19', NULL, '2', '1', '1', '3', '5'),
(NULL, 4, 'Granuleuse et naturelle', '20', NULL, '1', '2', '2', '5', '4');

INSERT INTO `carte` (`carte_id`, `categorie_id`, `nom`, `carte_numero`, `image`, `sujet1_points`, `sujet2_points`, `sujet3_points`, `sujet4_points`, `sujet5_points`) 
VALUES 
(NULL, 5, 'Photographie en noir et blanc', '21', NULL, '5', '4', '3', '2', '1'),
(NULL, 5, 'Illustration géométrique', '22', NULL, '4', '5', '4', '1', '2'),
(NULL, 5, 'Illustration 3D', '23', NULL, '3', '3', '5', '4', '3'),
(NULL, 5, 'Illustration rétro/vintage', '24', NULL, '2', '1', '1', '3', '5'),
(NULL, 5, 'Food Photography', '25', NULL, '1', '2', '2', '5', '4');