<!DOCTYPE html> 
    <html lang="en"> 
    <head> 
        <title>Lab 5a Q1</title> 
    </head> 
    <body> 
        <?php
        $name = "Valfajar Prayoga Putra Husnan";
        $matricNum = "JI240005";
        $course = "BIC21203";
        $yearOfStudy = 2023;
        $address = "Blok Anggrek IV No.1, Permata Jingga Residence, Malang City, Indonesia"
        ?> 
        <table border='1' cellspacing='0' cellpadding='5'> 
        <tr> 
            <td>Name: </td> 
            <td><?php echo "$name"; ?></td>
        </tr> 
        <tr> 
            <td>Matrics Number: </td> 
            <td><?php echo "$matricNum"; ?></td>
        </tr> 
        <tr> 
            <td>Course: </td> 
            <td><?php echo "$course"; ?></td>
        </tr> 
        <tr> 
            <td>Year Of Study: </td> 
            <td><?php echo "$yearOfStudy"; ?></td>
        </tr> 
        <tr> 
            <td>Address: </td> 
            <td><?php echo "$address"; ?></td>
        </tr> 
        </table> 
    </body> 
</html>
