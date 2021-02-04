DELIMITER $$

CREATE TRIGGER after_regiuni_insert
    AFTER INSERT
    ON regiuni FOR EACH ROW
BEGIN
    INSERT INTO istoric_regiuni(regiune, detalii, tip) VALUES(new.id, CONCAT('Regiunea ', new.denumire, ' a fost activata!'), 1);
    END$$

    DELIMITER ;

DELIMITER $$

    CREATE TRIGGER after_regiuni_update
        AFTER UPDATE
        ON regiuni FOR EACH ROW
    BEGIN
        IF new.stare = 0 THEN
            INSERT INTO istoric_regiuni(regiune, detalii, tip) VALUES(new.id, CONCAT('Regiunea ', new.denumire, ' a fost suspendata!'), new.stare);
    END IF;
    IF new.stare = 1 THEN
            INSERT INTO istoric_regiuni(regiune, detalii, tip) VALUES(new.id, CONCAT('Regiunea ', new.denumire, ' a fost activata!'), new.stare);
    END IF;
END$$

DELIMITER ;
