<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include '../lang/language.php';
if(!isset($_SESSION['language'])) {
   $_SESSION['language'] = "en";
} 
if(isset($_SESSION['language'])) {
  include('../lang/'.$_SESSION['language'].'.php');
} else {
    include('../lang/en.php'); // Default language file
}
// Function to get translation
function lang_($key) {
    global $translations;
    return isset($translations[$key]) ? $translations[$key] : $key;
}
?>
<!-- Load css for each languages -->
<link href="<?php echo $ASSETS_URI; ?>css/<?php echo $_SESSION['language']; ?>.css" rel="stylesheet" />
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  
  <!-- Button trigger modal for change language  -->
  <button type="button" class="btn btn-outline-secondary me-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="bx bx-world"></i> <?php echo lang_($_SESSION['language']);?>
  </button>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo lang_('Change language'); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body center">
        
        <form class="row g-3" action="" method="post">
          <div class="col-md-6">
            <select name="language" id="language" class="form-select">
                <option value="en"<?php echo ($_SESSION['language'] == 'per') ? 'selected' : ''; ?>>🇺🇸 English</option>
                <option value="per"<?php echo ($_SESSION['language'] == 'en') ? 'selected' : ''; ?>>🇮🇷 Persian</option>
                <!-- Add more language options as needed -->
            </select>
          </div>
          <div class="col-md-6">
            <button type="submit" class="btn btn-primary w-100">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


