<?php
/**
* SPRINT 01
*
* @author: Kilian Kraus
* @Matrikel:
* Datum: 08.04.2015
*
* User­Story (Nr. 20 ): Als Dozent möchte ich mich zur Verwaltung meiner Daten online einloggen können. (42 Points)
* Zeit: 
*/
?><!--TODO HTML5 umsetzen-->
<div class="container">
    <div class="box">
        <h3>Start</h3>
        <p>
            Hallo. Bitte einloggen.
			<?php
			$result=UserModel::getUserData('dozent');
			echo $match = password_verify('dozent', $result->user_password_hash);
			
			echo $result->user_name;
			?>
		</p>
    </div>
</div>
