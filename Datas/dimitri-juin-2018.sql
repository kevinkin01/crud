-- MySQL Script generated by MySQL Workbench
-- Wed Jun 27 11:04:53 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema dimitri-testjuin
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema dimitri-testjuin
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dimitri-testjuin` DEFAULT CHARACTER SET utf8 ;
USE `dimitri-testjuin` ;

-- -----------------------------------------------------
-- Table `dimitri-testjuin`.`author`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dimitri-testjuin`.`author` (
  `idauthor` INT NOT NULL AUTO_INCREMENT,
  `thelogin` VARCHAR(80) NOT NULL,
  `thename` VARCHAR(160) NOT NULL,
  `thepwd` CHAR(64) NOT NULL,
  PRIMARY KEY (`idauthor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dimitri-testjuin`.`category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dimitri-testjuin`.`category` (
  `idcategory` INT NOT NULL AUTO_INCREMENT,
  `thecategtitle` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`idcategory`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dimitri-testjuin`.`article`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dimitri-testjuin`.`article` (
  `idarticle` INT NOT NULL AUTO_INCREMENT,
  `thetitle` VARCHAR(150) NOT NULL,
  `thetext` TEXT NOT NULL,
  `thedate` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `authoridauthor` INT NOT NULL,
  `categoryidcategory` INT NOT NULL,
  PRIMARY KEY (`idarticle`),
  INDEX `fk_article_author_idx` (`authoridauthor` ASC),
  INDEX `fk_article_category1_idx` (`categoryidcategory` ASC),
  CONSTRAINT `fk_article_author`
    FOREIGN KEY (`authoridauthor`)
    REFERENCES `dimitri-testjuin`.`author` (`idauthor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_article_category1`
    FOREIGN KEY (`categoryidcategory`)
    REFERENCES `dimitri-testjuin`.`category` (`idcategory`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
