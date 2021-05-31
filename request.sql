INSERT INTO lec_team (acronym, name) VALUES('vit','vitality');

INSERT INTO lec_match(id_team1, id_team2) VALUES(1,2);

UPDATE lec_match
SET id_winner = 1
WHERE id = 1;

INSERT INTO lec_bet (id_user, id_lec_match, id_bet) VALUES(1, 1, 1);


(pas à jour)