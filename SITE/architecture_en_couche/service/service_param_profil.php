<?php 
include_once("../dao/utilisateurMysqliDao.php");
include_once("../model-metier/Utilisateur.php");
include_once("utilisateur_exception.php");


class UtilisateurService{

    public function ajoutUtilisateur($email, $password){
        try{
            $addUser= new UtilisateurMysqliDao;
            $addUser->ajoutUtilisateur($email, $password);
        } 
        catch (daoException $de){
            throw new ServiceException($de->getMessage(), $de->getCode());
        }
    }


    public function chercherMail($email){
        try{
            $recherchEmail= new EmployesMysqliDao;
            $recherchEmail->chercherMail($email);
        } 
        catch (daoException $de){
            throw new ServiceException($de->getMessage(), $de->getCode());
        }
    }


    public function chercherPseudo($pseudo){
        try{
            $recherchePseudo= new EmployesMysqliDao;
            $recherchePseudo->chercherPseudo($pseudo);
        } 
        catch (daoException $de){
            throw new ServiceException($de->getMessage(), $de->getCode());
        }
    }


    public function updateProfil($utilisateur){
        try{
            $updateUser= new EmployesMysqliDao;
            $data=$updateUser-> updateProfil($utilisateur);
        } 
        catch (daoException $de){
            throw new ServiceException($de->getMessage(), $de->getCode());
        }
        finally{
            return($data);
        }
    }


    





}