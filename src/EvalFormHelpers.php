<?php

function make_options($name) {
  return '<h6>Grade each student one at a time and then hit the submit button when you <br>have filled in all 5 catagories for each student.
  You are currently grading: $name</h6><div id="role">
    <label style="margin-left: 10em";><h5>Role</h5></label><br>
    <label>Worst</label>
      <form style="margin-left: 2.5em";>
        <input type="radio" class="radio" name="role" id="role0" value="0points"> Rarely completes assigned work<br>
        <input type="radio" class="radio" name="role" id="role1" value="1point"> Occasionally completes work<br>
        <input type="radio" class="radio" name="role" id="role2" value="2point"> Mostly completes assigned work<br>
        <input type="radio" class="radio" name="role" id="role3" value="3point"> Always completes assigned work
      </form>
    <label>Best</label>
  </div><br><br><br>
  <div id="Leadership">
    <label style="margin-left: 10em";><h5>Leadership</h5></label><br>
    <label>Worst</label>
      <form style="margin-left: 2.5em";>
        <input type="radio" class="radio" name="leadership" id="leadership0" value="0points"> Rarely takes leadership role; Does not collaborate<br>
        <input type="radio" class="radio" name="leadership" id="leadership1" value="1point"> Occasionally shows leadership; Mostly collaborates <br>
        <input type="radio" class="radio" name="leadership" id="leadership2" value="2point"> Shows an ability to lead when necessary; Willing to assist teammates<br>
        <input type="radio" class="radio" name="leadership" id="leadership3" value="3point"> Takes leadership role; Is a good collaborator
      </form>
    <label>Best</label>
  </div><br><br><br>
  <div id="Participation">
    <label style="margin-left: 10em";><h5>Participation</h5></label><br>
    <label>Worst</label>
      <form style="margin-left: 2.5em";>
        <input type="radio" class="radio" name="participation" id="participation0" value="0points"> Rarely participates in meeting and does not share ideas<br>
        <input type="radio" class="radio" name="participation"  id="participation1" value="1point"> Offers unclear or unhelpful ideas in meetings<br>
        <input type="radio" class="radio" name="participation"  id="participation2" value="2point"> Attends and particpates in most meetings; Offer useful ideas in meetings<br>
        <input type="radio" class="radio" name="participation"  id="participation3" value="3point"> Attends and participates in all meetings; Clearly expresses well developed ideas
      </form>
    <label>Best</label>
  </div><br><br><br>
  <div id="Professionalism">
  <label style="margin-left: 10em";><h5>Professionalism</h5></label><br>
    <label>Worst</label>
      <form style="margin-left: 2.5em";>
        <input type="radio" class="radio" name="prof" id="professionalism0" value="0points"> Often discourteous and/or openly critical of teammates <br>
        <input type="radio" class="radio" name="prof" id="professionalism1" value="1point"> Usually appreciates teammates\' perspective, but often unwilling to consider them<br>
        <input type="radio" class="radio" name="prof" id="professionalism2" value="2point"> Values teammates\' perspectives and often willing to consider them<br>
        <input type="radio" class="radio" name="prof" id="professionalism3" value="3point"> Always courteous to teammates
      </form>
    <label>Best</label>
  </div><br><br><br>
  <div id="Quality">
    <label style="margin-left: 10em";><h5>Quality</h5></label><br>
    <label>Worst</label>
      <form style="margin-left: 2.5em";>
        <input type="radio" class="radio" name="quality" id="quality0" value="0points"> Rarely commits to shared documents<br>
        <input type="radio" class="radio" name="quality" id="quality1" value="1point"> Other sometimes needed to revise, debug, or fix their work<br>
        <input type="radio" class="radio" name="quality" id="quality2" value="2point"> Often commits to shared documents<br>
        <input type="radio" class="radio" name="quality" id="quality3" value="3point"> Frequently commits to shared documents
      </form>
    <label>Best</label>
  </div>';
}

function make_content($name1) {
  $open = '<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="student_submission_edit.js"></script><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Submission Form</title></head><html><body class="main">';
  $close = '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script></body></html>'

  return $open.make_options($name1).make_options($name1).make_options($name1).$close;
}

?>
