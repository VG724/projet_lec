INSERT INTO lec_team (acronym, name) VALUES 
	 ('G2','G2 Esports'),
     ('FNC','Fnatic'),
     ('RGE','Rogue'),
     ('VIT','Vitality');
	 
INSERT INTO lec_day (day) VALUES 
	(CURRENT_TIMESTAMP),
    (CURRENT_TIMESTAMP),
    (CURRENT_TIMESTAMP),
    (CURRENT_TIMESTAMP);
	
INSERT INTO lec_match (day_id,team1_id,team2_id, winner_id) VALUES
     (1, 1, 2, 1),
     (2, 2, 3, NULL),
     (3, 1, 3, NULL);

INSERT INTO lec_bet (score, user_id, lec_match_id, winner_id) VALUES
	(1000, 1, 1, 1),
	(1500, 2, 1, 2),
	(3000, 1, 2, 2),
	(500, 2, 3, 3);
    