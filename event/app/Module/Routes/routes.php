<?php 
	/*Login*/
	$app->post('/login','Controller\Login:userLogin');
	$app->post('/logout','Controller\Login:userLogout')->add( new Middleware\Auth() );
	
	/*User Register or add*/
	$app->post('/adduser','Controller\User:addUser');