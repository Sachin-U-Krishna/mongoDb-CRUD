<?php include'include.php'; 

    //Retrieve info
    $id = $_POST['id'];
    $name = $_POST['name'];
    $marks = $_POST['marks']; 

    //Display The collection documents
    if(isset($_POST['display'])) {
        $displayResult = $collection->find(
            [],
            ['sort' => ['_id' => 1] ]
        );

        echo "<html> <body> <table> <tr> <th>id</td> <th>name</td> <th>marks</td> </tr>";

        foreach	($displayResult as $i){
            echo "<tr>";
            foreach	($i as $j){
                echo "<td> $j </td>"; 
            }
            echo "</tr>";
        }

        echo"</table> </body> </html>";
    }

    //Insert the document
    if(isset($_POST['insert'])) {
        if((!$id)||(!$name)||(!$marks)===true) {
            echo "Please Fill out all the text box";
        }
        else {
            echo "Id: $id <br> Name: $name <br> Marks: $marks";

            $checkId = $collection->findOne(
                ['_id'=>"$id"]
            );

            if((!$checkId)==false) {
                echo"<br> You cannot insert document <br><br> Id: $id already exists";
            }
            else {
                $insert = $collection->insertOne(
                    ["_id"=>"$id", "name"=>"$name", "marks"=>"$marks"]
                );
                echo"<br> Inserted document Id: $id";
            }

        }
    }

    //Delete the document
    if(isset($_POST['delete'])) {
        if((!$id)===true) {
            echo "Please specify the id to be deleted";
        }
        else {
            $checkId = $collection->findOne(
                ['_id'=>"$id"]
            );

            if((!$checkId)==true) {
                echo "Please specify a existing document id to be deleted";
            } 
            else {
                $delete = $collection->deleteOne(
                    ["_id"=>"$id"]
                );
                echo"Deleted document where <br> Id:$id";
            }
        }
    }

    //Replace the document
    if(isset($_POST['replace'])) {
        if((!$id)||(!$name)||(!$marks)===true) {
            echo "Please Fill out all the text box";
        }
        else {
            echo "Id: $id <br> Name: $name <br> Marks: $marks";

            $checkId = $collection->findOne(
                ['_id'=>"$id"]
            );

            if((!$checkId)==true) {
                echo"<br> You cannot replace document where <br> Id: $id does not exist";
            }
            else {
                $insert = $collection->replaceOne(
                    ["_id"=>"$id"],
                    ["name"=>"$name", "marks"=>"$marks"]
                );
                echo"<br> Replaced document Id: $id";
            }

        }
    }

    //Update the document
    if(isset($_POST['update'])) {
        if((!$id)||(!$marks)===true) {
            echo "Please Fill out id and marks text box";
        }
        else {
            echo "Id: $id <br> Marks: $marks";

            $checkId = $collection->findOne(
                ['_id'=>"$id"]
            );

            if((!$checkId)==true) {
                echo"<br> You cannot update document where <br> Id: $id does not exist";
            }
            else {
                $insert = $collection->updateOne(
                    ["_id"=>"$id"],
                    ['$set'=>["marks"=>"$marks"]]
                );
                echo"<br> Updated document Id: $id";
            }

        }
    }

?>
