<?php include 'inc/header.php';
$feeds = [
  [
    'id' => '1',
    'name' => 'Jane Doe',
    'email' => 'jane.doe@someemail.com',
    'msg' => 'I just want to express myself ... again.'
  ],
  [
    'id' => '2',
    'name' => 'Jon Doe',
    'email' => 'jon.doe@someemail.com',
    'msg' => 'I just want to express that Jane express herself'
  ],
  [
    'id' => '3',
    'name' => 'Wyatt Earp',
    'email' => 'wyatt.earp@someemail.com',
    'msg' => 'Not even close to an idea.'
  ],
  [
    'id' => '4',
    'name' => 'Brad Pitt',
    'email' => 'brad.pitt@someemail.com',
    'msg' => 'Nothing to do these days ...'
  ]
]
?>

<h2>Feedback</h2>
<?php if (empty($feeds)) : ?>
  <p class="lead mt3">No feedback yet.</p>
<?php endif; ?>

<?php foreach ($feeds as $item) : ?>
  <div class="card my-3">
    <div class="card-body text-center">
      <?php echo $item['msg'] ?>
      <div class="text-secondary">
        <?php echo ' – ' . $item['name'] ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<?php include 'inc/footer.php'; ?>