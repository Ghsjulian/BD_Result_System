<?php
$ein = $_GET['ein'];
$pass = $_GET['pass'];
$roll = $_GET['roll'];
$reg = $_GET['reg'];
?>

<html>
<head>
  <title>Education Board Bangladesh</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <meta name="keywords" content>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/sheet.css" rel="stylesheet" type="text/css">

  <style type="text/css">
    .eruda-search-highlight-block {
      display: inline
    }

    .eruda-search-highlight-block .eruda-keyword {
      background: #332a00;
      color: #ffcb6b
    }
  </style>
</head>
<body>

  <input type="text" id="ein" value="<?php echo $ein ?>" hidden>
  <input type="text" id="pass" value="<?php echo $pass ?>" hidden>
  <input type="text" id="reg" value="<?php echo $reg ?>" hidden>
  <input type="text" id="roll" value="<?php echo $roll ?>" hidden>

  <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td>
          <table width="650" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
            <tbody>
              <tr>
                <td width="12" align="left" valign="top" background="images/back_cor_left_top.gif">
                  <img src="images/trans.gif" width="12" height="12">
                </td>
                <td valign="top" background="images/back_top.gif">
                  <img src="images/trans.gif" width="12" height="12">
                </td>
                <td width="12" align="right" valign="top" background="images/back_cor_right_top.gif">
                  <img src="images/trans.gif" width="12" height="12">
                </td>
              </tr>
              <tr>
                <td align="left" valign="top" background="images/back_left.gif"> </td>
                <td valign="top">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                      <tr>
                        <td width="142" height="121" align="center" valign="middle" bgcolor="#EEEEEE" class="left_round">
                          <img src="images/bd_logo.png" width="80%">
                        </td>
                        <td width="2">
                          <img src="images/trans.gif" width="2" height="1">
                        </td>
                        <td valign="top" bgcolor="#007814">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                              <tr>
                                <td align="right">
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                      <tr>
                                        <td align="left" valign="bottom">
                                          <h1 id="site_title_des">Ministry of Education</h1>
                                        </td>
                                        <td align="right" valign="top">
                                          <img src="images/banner_flag.jpg" width="220" height="41" hspace="0" vspace="0" border="0">
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                              <tr>
                                <td align="left" bgcolor="#479e55">
                                  <img src="images/trans.gif" width="1" height="1">
                                </td>
                              </tr>
                              <tr>
                                <td height="55" align="left">
                                  <h1 id="site_title"> Intermediate and Secondary Education Boards Bangladesh</h1>
                                </td>
                              </tr>
                              <tr>
                                <td align="right">
                                  <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                  </table>
                                </td>
                              </tr>
                              <tr>
                                <td align="right" bgcolor="#FFFFFF">
                                  <img src="images/trans.gif" width="1" height="1">
                                </td>
                              </tr>
                              <tr>
                                <td height="23" align="right" bgcolor="#86C775" class="bar_bk">
                                  <a href="http://www.educationboard.gov.bd" class="links02">Official Website of Education Board</a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <img src="images/trans.gif" width="1" height="1">
                </td>
                <td align="right" valign="top" background="images/back_right.gif"> </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table width="650" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
            <tbody>
              <tr>
                <td width="12" align="left" valign="top" background="images/back_left.gif"> </td>
                <td valign="top">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                      <tr id="head">

                      </tr>
                      <tr>
                        <td align="center" valign="middle">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                              <tr id="sheet_info">

                              </tr>
                              <tr>
                                <td height="40" align="center" valign="middle">
                                  <span class="black16bold">Grade Sheet</span>
                                </td>
                              </tr>
                              <tr>
                                <td align="center" valign="middle">
                                  <table width="100%" border="0" cellpadding="3" cellspacing="1" class="black12">
                                    <tbody id="grade">

                                    </tbody>
                                    <!---
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <tbody>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <tr class="black12bold">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td width="19%" align="left" valign="middle" bgcolor="#AFB7BE">Code</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td width="66%" align="left" valign="middle" bgcolor="#AFB7BE">Subject</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td width="15%" align="left" valign="middle" bgcolor="#AFB7BE">Grade</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#EEEEEE">101</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#EEEEEE">BANGLA</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#EEEEEE">A-</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#DEE1E4">107</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#DEE1E4">ENGLISH</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#DEE1E4">A</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#EEEEEE">109</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#EEEEEE">MATHEMATICS</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#EEEEEE">C</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#DEE1E4">150</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#DEE1E4">BANGLADESH AND GLOBAL STUDIES</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#DEE1E4">B</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#EEEEEE">112</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#EEEEEE">HINDU RELIGION AND MORAL EDUCATION</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#EEEEEE">A-</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#DEE1E4">136</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#DEE1E4">PHYSICS</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#DEE1E4">A-</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#EEEEEE">137</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#EEEEEE">CHEMISTRY</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#EEEEEE">A</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#DEE1E4">138</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#DEE1E4">BIOLOGY</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#DEE1E4">A-</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#EEEEEE">154</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#EEEEEE">INFORMATION AND COMMUNICATION TECHNOLOGY</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#EEEEEE">A</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#DEE1E4">134</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#DEE1E4">AGRICULTURE STUDIES</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#DEE1E4">A-</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#EEEEEE">147</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#EEEEEE">PHYSICAL EDUCATION, HEALTH & SPORTS</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#EEEEEE">A+</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#DEE1E4">156</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#DEE1E4">CAREER EDUCATION</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td align="left" valign="middle" bgcolor="#DEE1E4">A+</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </tbody>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ---->
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" valign="middle" height="40">
                          <a href="index.php" class="links">Search Again</a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <table width="626" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                              <tr bgcolor="#86c775">
                                <td colspan="5">…</td>
                              </tr>
                              <tr>
                                <td colspan="5">
                                  <img src="images/trans.gif" width="1" height="1">
                                </td>
                              </tr>
                              <tr>
                                <td width="5" align="left" valign="bottom" bgcolor="#F2F2F2" class="footer_text">
                                  <img src="images/footer_corner_left.gif" width="5" height="5">
                                </td>
                                <td width="356" height="70" align="left" valign="middle" bgcolor="#F2F2F2" class="footer_text">©2005-2020 Ministry of Education, All rights reserved.</td>
                                <td width="150" height="70" align="right" valign="middle" bgcolor="#F2F2F2" class="footer_text">
                                  "Powered by"
                                  <img src="images/footer_corner_right.gif" width="5" height="5">
                                </td>
                                <td width="110" height="70" align="center" valign="middle" bgcolor="#F2F2F2">
                                  <img src="images/tbl_logo.png" width="83" height="44">
                                </td>
                                <td width="5" align="left" valign="bottom" bgcolor="#F2F2F2" class="footer_text">
                                  <img src="images/footer_corner_right.gif" width="5" height="5">
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
                <td width="12" align="right" valign="top" background="images/back_right.gif"> </td>
              </tr>
              <tr>
                <td align="left" valign="top" background="images/back_cor_left_bot.gif">
                  <img src="images/trans.gif" width="12" height="12">
                </td>
                <td valign="top" background="images/back_bot.gif">
                  <img src="images/trans.gif" width="12" height="12">
                </td>
                <td align="right" valign="top" background="images/back_cor_right_bot.gif">
                  <img src="images/trans.gif" width="12" height="12">
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr>
        <td> </td>
      </tr>
    </tbody>
  </table>
  <script src="js/getSheet.js"></script>
</body>
</html>