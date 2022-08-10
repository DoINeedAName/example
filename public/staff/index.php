<?php include('../../private/initialize.php') ?>
<?php include(SHARED_PATH. '/staff_header.php') ?>

  <div id='content'>
    <?php
      /*$subjects = ['DataScience', 'AI', 'MachineLearning', 'CyberSecurity'];
     echo "the first data item ". $subjects[0];
     echo "<br> The number of items in the array is ".count($subjects);
     echo "<br> the first data item ". end($subjects);

     echo '<br/>';

     for($i=0; $i < count($subjects); $i++){
      echo '<br> A subject is ' .$subjects[$i];
     }
     
     echo '<br/>';

     foreach ($subjects as $subject){
      echo '<br>' .$subject;
     }*/

      $subjects=[ ['id' => 1, 'subject' => 'DataScience', 'department' => 'IT', 'accessible' => 1],
                  ['id' => 2, 'subject' => 'AI', 'department' => 'IT', 'accessible' => 1],
                  ['id' => 3, 'subject' => 'MachineLearning', 'department' => 'IT', 'accessible' => 1],
                  ['id' => 4, 'subject' => 'CyberSecurity', 'department' => 'IT', 'accessible' => 1]];

      foreach($subjects as $subject){
        echo 'Id ='. $subject ['id']. '<br>';
        echo 'subject ='. $subject ['subject']. '<br>';
        echo 'department ='. $subject ['department']. '<br>';
        echo 'accessible ='. $subject ['accessible']. '<br>';
        /*$msg = '';
        if($subject['accessible'] == '1'){
          $msg = 'This subject is available';
        }
        else {
          $msg = 'This subject is unavailable';
        }*/

        $msg = $subject['accessible'] == '1' ? 'This subject is available' : 'This subject is not available';

        echo $msg;
        echo '<br>';
        echo '<br>';
      }
    ?>

    <table class='list'>
      <tr>
        <th>id</th>
        <th>subject</th>
        <th>department</th>
        <th>accessible</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php foreach($subjects as $subject) { ?>
      <tr>
        <td><?php echo h($subject['id']); ?></td>
        <td><?php echo h($subject['subject']); ?></td>
        <td><?php echo h($subject['department']).'<b>Holmes is something</b>'; ?></td>
        <td><?php echo h($subject['accessible']); ?></td>
        <td><a href="<?php echo 'show.php?id='.u($subject['id']).'&subject='.u($subject['subject']) ?>">View</a></td>
        <td><a href=#>Edit</a></td>
        <td><a href=#>Delete</a></td>
      </tr>
      
      <?php } ?>
    </table>
  </div>
    
<?php include(SHARED_PATH. '/staff_footer.php') ?>