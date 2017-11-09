<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>SOLVE A CASE</title>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous">
</script>
<script
src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
crossorigin="anonymous">
</script>
<style>
@font-face {
 font-family: "TradeGothicNo.20-CondBold";
 src: url('../TradeGothicLTStd-BdCn20.otf');
}
</style>
<link rel="stylesheet" type="text/css" href="../bz_newui.css">
</head>
<body>
<?php 
$ns = 'solvac';
require('functions.php');
?>
<div class="bz-module">
  <p></p>
  <h2 id="why">Why is this important?</h2>
  <?php 
  bz_open_box('question', 'Why do we study history in school?');
    $items = array(
      array(
        'correctness' => 'correct',
        'content' => 'To learn from the past',
      ),
      array(
        'correctness' => 'incorrect',
        'content' => 'To memorize important dates',
      ),
      array(
        'correctness' => 'incorrect',
        'content' => 'To win trivia games',
      ),
      array(
        'correctness' => 'incorrect',
        'content' => 'To sound smart at parties',
      ),
    );
    bz_make_radio_list($items);
  bz_close_box();
  //
  bz_open_box('answer');
  ?>
  <p>By digging into what others have done in the past, we can learn from their mistakes and potentially make better decisions in the future.</p>
  <p>This is the same reason we study <span class="bz-has-tooltip" title="a written description of a problem or situation">cases</span>: by understanding the problems and decisions other people have grappled with in the past, we can determine what we would do if we encountered a similar situation. </p>
  <?php 
  bz_open_box('question', 'Which industries typically use the case study method to get better at solving problems?');
    $items = array(
      array(
        'content' => 'Education',
        'correctness' => 'correct',
      ),
      array(
        'content' => 'Business ',
        'correctness' => 'correct',
      ),
      array(
        'content' => 'Law ',
        'correctness' => 'correct',
      ),
      array(
        'content' => 'Psychology',
        'correctness' => 'correct',
      ),
      array(
        'content' => 'Social Work ',
        'correctness' => 'correct',
      ),
      array(
        'content' => 'Medicine',
        'correctness' => 'correct',
      ),
    );
    bz_make_cr_list($items);
  bz_close_box();
  //
  bz_open_box('answer'); ?>
    <p>Almost any field you go into will use some form of the case study method for understanding the problems of the industry and learning from them. If you enroll in business, medical, law, or education schools for a graduate degree, you will undoubtedly encounter cases in your classes. Lucky you! You get a head start.</p>
  <?php 
  bz_close_box();
  ?>
  <h2 id="how">How do I do this?</h2>
  <h3>How do I dissect a Case Study?</h3>
  <?php bz_open_box();?>
    <p>Which of the following is <em><strong>not</strong></em> something case studies are used for?</p>
    <?php 
    $items = array(
      'Provide solutions to the problem ',
      'Help us ask the right questions when faced with a problem ',
      'Provide just the facts of a situation ',
      'Address a real-life problem with real people ',
      'Put us in the role of the decision-maker ',
      'Focus on a main protagonist’s decision point ',
    );
    bz_make_radio_list($items);
  bz_close_box();
  //
  bz_open_box('answer'); 
  ?>
    <p>Instead of giving us solutions, the case study sets up the problem so that we are left to grapple with possible solutions on our own. We are given the facts of the situation so that we are able to step into the shoes of the decision-maker in the case.</p>
    <p>As in real life, the case may not have all the information we need to make a well-informed decision. </p>
  <?php
  bz_close_box();
  //
  bz_open_box();
  ?>
    <p>Here are the steps you need to take when dissecting a case study. Sort them into the correct order you should do them. </p>
    <table class="sort-to-match">
      <?php $GLOBALS['for'] = 'for-match';?>
      <tbody>
        <tr>
          <th>Step 1</th>
          <td>Skim the case study quickly to understand the broad issues involved.</td>
        </tr>
        <tr>
          <th>Step 2</th>
          <td>Read the case very carefully, underlining key facts as you go.</td>
        </tr>
        <tr>
          <th>Step 3</th>
          <td>Take note of the key problems and decisions made.</td>
        </tr>
        <tr>
          <th>Step 4</th>
          <td>Think about a set of recommendations to address these problems.</td>
        </tr>
      </tbody>  
    </table>
  <?php 
  bz_close_box();
  //
  bz_open_box('action', null, 'Read this to get ready'); 
  ?>
    <p>In Learning Lab this week, you will discuss the case: “<span class="tbd">Chris Peterson at DSS Consulting.</span>” This is a case that MIT’s business school developed to better understand challenges of teamwork and leadership. Read the case now to prepare, following the steps you sorted above. It will take you at least 30 minutes to fully digest this case.</p>
  <?php
  bz_close_box();
  //
  ?>
  <h3>How do I participate in a Case Study discussion?</h3>
  <?php
  bz_open_box('question','What is the goal of a case study discussion? (check all that apply)');
    $items = array(
      array(
        'content' => 'Come to a consensus with my peers ',
        'correctness' => 'incorrect',
      ),
      array(
        'content' => 'Learn about my own leadership',
        'correctness' => 'correct',
      ),
      array(
        'content' => 'Determine what I would do in a similar situation ',
        'correctness' => 'correct',
      ),
      array(
        'content' => 'Learn from what my peers would do in a similar situation ',
        'correctness' => 'correct',
      ),
    );
    bz_make_cr_list($items);
  bz_close_box();
  //
  bz_open_box();
  ?>
    <p>There are three main questions your cohort will answer in the discussion. Sort them in the optimal order you should answer them:</p>
    <table class="sort-to-match">
      <?php $GLOBALS['for'] = 'for-match';?>
      <tbody>
        <tr>
          <th>First</th>
          <td>What is the problem? </td>
        </tr>
        <tr>
          <th>Second</th>
          <td>What is the <span class="bz-has-tooltip" title="Meaning, why did the problem happen?">diagnosis</span>?</td>
        </tr>
        <tr>
          <th>Third</th>
          <td>What should one <span class="bz-has-tooltip" title="Meaning, what's the solution?">do about it</span>? </td>
        </tr>
      </tbody>
    </table>
  <?php
  bz_close_box();
  ?>
  <h2 id="wrap-up">Wrap-up</h2>
  <p>In this module we looked at case studies, which are popular and useful learning tools in many academic and professional situations.</p>
  <ul>
    <li></li>
  </ul>
  <h3>Next Steps</h3>
  <p></p>
</div>
<script src="../new-ui-sandbox.js"></script>
<progress max="100" id="bz-progress-bar" value="14"></progress>
</body>
</html>