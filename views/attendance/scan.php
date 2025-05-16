<?php if($this->student != null): ?>
<?php
// Prepare middle initial with a period for display
$middlename = ($this->student['middlename'] != "") ? " " . strtoupper(substr($this->student['middlename'], 0, 1)) . ". " : " ";
$recentStudentMiddlename = ($this->recentStudent && $this->recentStudent['middlename'] != "") ? " " . strtoupper(substr($this->recentStudent['middlename'], 0, 1)) . ". " : " ";
?>
<div class="row">
    <!-- Recent Student Section -->
    <div class="col-md-4">
        <?php if($this->recentStudent != null): ?>
        <h5 class="text-center text-bold">Recent Student</h5>
        <p><img class="img-responsive img-bordered" style="margin: 0 auto;" src="<?php echo ($this->recentStudent['image'] != "") ? URL . "public/uploads/student/" . $this->recentStudent['image'] : URL . "public/no-image.gif"; ?>" /></p>
        <h5 class="text-center no-margin text-bold"><?php echo $this->recentStudent['firstname'] . $recentStudentMiddlename . $this->recentStudent['lastname']; ?></h5>
        <h6 class="text-center no-margin text-bold"><?php echo $this->recentStudent['course_name']; ?>, Year: <?php echo $this->student['year']; ?>, Section: <?php echo $this->student['section']; ?></h6>
        <?php endif; ?>
    </div>

    <!-- Current Student Section -->
    <div class="col-md-8">
        <h5 class="text-center text-bold">Current Student</h5>
        <p><img class="img-responsive img-bordered" style="margin: 0 auto;" src="<?php echo ($this->student['image'] != "") ? URL . "public/uploads/student/" . $this->student['image'] : URL . "public/no-image.gif"; ?>" /></p>
        <h4 class="text-center no-margin text-bold"><?php echo $this->student['firstname'] . $middlename . $this->student['lastname']; ?></h4>
        <h5 class="text-center no-margin text-bold"><?php echo $this->student['course_name']; ?>, Year: <?php echo $this->student['year']; ?>, Section: <?php echo $this->student['section']; ?></h5>
    </div>
</div>
<p class="alert alert-success no-margin">You are successfully logged.</p>
<?php else: ?>
<p class="alert alert-info no-margin">No Student is associated with this ID Number</p>
<input type="hidden" name="studentid" value="0" />
<?php endif; ?>