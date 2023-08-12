function ghs__(tag) {
  return document.querySelector(tag);
}
var html, religion;
var tag = ghs__("#sheet_info");
var formData = new FormData();
formData.append("ein", "8005");
formData.append("roll", "123");
formData.append("regi", "161646");
formData.append("password", "123456");

fetch(`http://localhost:8000/Bd_Result/API/server/functions/getSheet.php`, {
  method: "POST",
  body: formData,
})
  .then((res) => {
    return res.json();
  })
  .then((data) => {
    ghs__("#head").innerHTML = `
<td height="50" align="center" valign="middle" class="black16bold" id="exam_name">${data.info.exam_name}  ${data.info.year}</td>
`;
    html = `
    <td align="center" valign="middle">
<table width="100%" border="0" cellpadding="3" cellspacing="1" class="black12">
<tbody>
<tr>
<td width="12%" align="left" valign="middle" bgcolor="#EEEEEE">Roll No</td>
<td width="27%" align="left" valign="middle" bgcolor="#EEEEEE" id="roll">${data.info.roll}</td>
<td width="22%" align="left" valign="middle" bgcolor="#EEEEEE">Name</td>
<td width="39%" align="left" valign="middle" bgcolor="#EEEEEE" id="name">${data.info.student_name}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">Board</td>
<td align="left" valign="middle" bgcolor="#EEEEEE" id="board">${data.info.board}</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">Father's Name</td>
<td align="left" valign="middle" bgcolor="#EEEEEE" id="father">${data.info.father}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">Group</td>
<td align="left" valign="middle" bgcolor="#EEEEEE" id="group">${data.info.group}</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">Mother's Name</td>
<td align="left" valign="middle" bgcolor="#EEEEEE" id="mother">${data.info.mother}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">Type</td>
<td align="left" valign="middle" bgcolor="#EEEEEE" id="type">${data.info.type}</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">Date of Birth</td>
<td align="left" valign="middle" bgcolor="#EEEEEE" id="birth">${data.info.birth}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">Result</td>
<td align="left" valign="middle" bgcolor="#EEEEEE" class="black12bold" id="result">${data.info.result}</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">Institute</td>
<td align="left" valign="middle" bgcolor="#EEEEEE" id="institute">${data.info.institute}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">GPA</td>
<td align="left" valign="middle" bgcolor="#EEEEEE" class="black12bold" colspan="3" id="point">${data.info.gpa}</td>
</tr>
</tbody>
</table>
</td>
    `;
    tag.innerHTML = html;

    if (data.student.religion === "Hinduism") {
      religion = `
  <td align="left" valign="middle" bgcolor="#EEEEEE">112</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">HINDU RELIGION AND MORAL EDUCATION</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">${data.subject.hindu_edu}</td>
  `;
    } else if (data.student.religion === "Islam") {
      religion = `
  <td align="left" valign="middle" bgcolor="#EEEEEE">112</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">ISLAM RELIGION AND MORAL EDUCATION</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">${data.subject.islam_edu}</td>
  `;
    } else if (data.student.religion === "Christian") {
      religion = `
  <td align="left" valign="middle" bgcolor="#EEEEEE">112</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">Christian RELIGION AND MORAL EDUCATION</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">${data.subject.christian_edu}</td>
  `;
    }

    //   console.log(data);

    if (data.info.group === "Science") {
      ghs__("#grade").innerHTML = `
<tr class="black12bold">
<td width="19%" align="left" valign="middle" bgcolor="#AFB7BE">Code</td>
<td width="66%" align="left" valign="middle" bgcolor="#AFB7BE">Subject</td>
<td width="15%" align="left" valign="middle" bgcolor="#AFB7BE">Grade</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">101</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">BANGLA</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">${data.subject.bangla}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">107</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">ENGLISH</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">${data.subject.english}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">109</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">MATHEMATICS</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">${data.subject.math}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">150</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">BANGLADESH AND GLOBAL STUDIES</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">${data.subject.global_study}</td>
</tr>
<tr>
${religion}
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">136</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">PHYSICS</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">${data.subject.physics}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">137</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">CHEMISTRY</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">${data.subject.chemistry}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">138</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">BIOLOGY</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">${data.subject.biology}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">154</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">INFORMATION AND COMMUNICATION TECHNOLOGY</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">${data.subject.ict}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">134</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">AGRICULTURE STUDIES</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">${data.subject.agriculture}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">147</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">PHYSICAL EDUCATION, HEALTH & SPORTS</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">${data.subject.physical_edu}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">156</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">CAREER EDUCATION</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">${data.subject.carrier_edu}</td>
</tr>`;
    } else if (data.info.group === "Humanity") {
      ghs__("#grade").innerHTML = `
<tr class="black12bold">
<td width="19%" align="left" valign="middle" bgcolor="#AFB7BE">Code</td>
<td width="66%" align="left" valign="middle" bgcolor="#AFB7BE">Subject</td>
<td width="15%" align="left" valign="middle" bgcolor="#AFB7BE">Grade</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">101</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">BANGLA</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">${data.subject.bangla}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">107</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">ENGLISH</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">${data.subject.english}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">109</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">MATHEMATICS</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">${data.subject.math}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">150</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">BANGLADESH AND GLOBAL STUDIES</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">${data.subject.global_study}</td>
</tr>
<tr>
${religion}
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">136</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">PHYSICS</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">${data.subject.physics}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">137</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">CHEMISTRY</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">${data.subject.chemistry}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">138</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">BIOLOGY</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">${data.subject.biology}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">154</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">INFORMATION AND COMMUNICATION TECHNOLOGY</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">${data.subject.ict}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">134</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">AGRICULTURE STUDIES</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">${data.subject.agriculture}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">147</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">PHYSICAL EDUCATION, HEALTH & SPORTS</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">${data.subject.physical_edu}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">156</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">CAREER EDUCATION</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">${data.subject.carrier_edu}</td>
</tr>`;
    } else if (data.info.group === "Commerce") {
      ghs__("#grade").innerHTML = `
<tr class="black12bold">
<td width="19%" align="left" valign="middle" bgcolor="#AFB7BE">Code</td>
<td width="66%" align="left" valign="middle" bgcolor="#AFB7BE">Subject</td>
<td width="15%" align="left" valign="middle" bgcolor="#AFB7BE">Grade</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">101</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">BANGLA</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">${data.subject.bangla}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">107</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">ENGLISH</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">${data.subject.english}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">109</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">MATHEMATICS</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">${data.subject.math}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">150</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">BANGLADESH AND GLOBAL STUDIES</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">${data.subject.global_study}</td>
</tr>
<tr>
${religion}
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">136</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">PHYSICS</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">${data.subject.physics}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">137</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">CHEMISTRY</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">${data.subject.chemistry}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">138</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">BIOLOGY</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">${data.subject.biology}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">154</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">INFORMATION AND COMMUNICATION TECHNOLOGY</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">${data.subject.ict}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">134</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">AGRICULTURE STUDIES</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">${data.subject.agriculture}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">147</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">PHYSICAL EDUCATION, HEALTH & SPORTS</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">${data.subject.physical_edu}</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">156</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">CAREER EDUCATION</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">${data.subject.carrier_edu}</td>
</tr>`;
    }
  });
