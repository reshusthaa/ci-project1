<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
   </head> 
	
   <body> 
      <form method = "" action = "">
        <?php 
            echo form_open('Stud_controller/add_student');
            echo form_label('Roll No.'); 
            echo form_input(array('id'=>'roll_no','name'=>'roll_no', 'value'=> $records[0]->roll_no)); 
            echo "<br/>"; 
			
            echo form_label('Name'); 
            echo form_input(array('id'=>'name','name'=>'name', 'value'=> $records[0]->name)); 
            echo "<br/>"; 
			
            echo form_submit(array('id'=>'submit','value'=>'Edit')); 
            echo form_close(); 
         ?> 
     </form> 
   </body>
	
</html>