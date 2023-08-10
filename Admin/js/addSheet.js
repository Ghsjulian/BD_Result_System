function ghs__(tag) {
  return document.querySelector(tag);
}

ghs__("#add-marksheet").onclick = (e) => {
  var group = ghs__("#group").textContent;
  getAllvalues(group);
};

function getAllvalues(check) {
  var formData = new FormData();
  if (check === "Science") {
    var group = ghs__("#group").textContent;
    var board = ghs__("#board").value;
    var father = ghs__("#father").value;
    var mother = ghs__("#mother").value;
    var type = ghs__("#type").value;
    var gpa = ghs__("#gpa").value;
    var name = ghs__("#name").textContent;
    var roll = ghs__("#roll").textContent;
    var dob = ghs__("#dob").value;
    var select = ghs__("#select_bank");
    var Selectvalue = select.value;
    var exam_name = select.options[select.selectedIndex].text;
    var year = ghs__("#year").value;
    var institute = ghs__("#institute").value;
    var result = ghs__("#result").value;
    /*    SHEET VALUES   */
    var bangla = ghs__("#bangla").value;
    var english = ghs__("#english").value;
    var bangladesh_history = ghs__("#bangladesh_history").value;
    var hindu = ghs__("#hindu").value;
    var physics = ghs__("#physics").value;
    var chemistry = ghs__("#chemistry").value;
    var biology = ghs__("#biology").value;
    var agriculture = ghs__("#agriculture").value;
    var phisical = ghs__("#phisical").value;
    var carrier = ghs__("#carrier").value;
    /*   PREPARED FOR SENDING INTO THE SERVER*/
    formData.append("bangla", bangla);
    formData.append("english", english);
    formData.append("math", math);
    formData.append("bangladesh_history", bangladesh_history);
    formData.append("hindu", hindu);
    formData.append("physics", physics);
    formData.append("chemistry", chemistry);
    formData.append("biology", biology);
    formData.append("agriculture", agriculture);
    formData.append("phisical", phisical);
    formData.append("carrier", carrier);
    /*    STUDENTS   INFORMATION*/
    formData.append("board", board);
    formData.append("father", father);
    formData.append("mother", mother);
    formData.append("type", type);
    formData.append("result", result);
    formData.append("roll", roll);
    formData.append("group", group);
    formData.append("gpa", gpa);
    formData.append("name", name);
    formData.append("institute", institute);
    formData.append("dob", dob);
    formData.append("year", year);
    formData.append("exam_name", exam_name);
    //console.log("It's Science")
    /*
     *
     *
     *  HERE I'LL USE AJAX
     *
     *
     */
    fetch("http://localhost:8000/Bd_Result/API/server/functions/sheet.php", {
      method: "POST",
      body: formData,
    })
      .then((res) => {
        return res.text();
      })
      .then((data) => {
        console.log(data);
      });
  } else if (check === "Humanity") {
  } else if (check === "Commerce") {
  } else {
    consol.log("It's Error ");
  }
}

function Fetchstudent() {
  var html, btn;
  fetch(
    `http://localhost:8000/Bd_Result/API/server/functions/addstudent.php?student_id=2`
  )
    .then((res) => {
      return res.json();
    })
    .then((data) => {
      ghs__("#roll").textContent = data.rool;
      ghs__("#name").textContent = data.student_name;
      ghs__("#group").textContent = data.group;
      if (data.group === "Science") {
        ghs__("#sheet_id").innerHTML = `
<td align="center" valign="middle">
<table width="100%" border="0" cellpadding="3" cellspacing="1" class="black12">
<tbody>
<tr class="black12bold">
<td width="19%" align="left" valign="middle" bgcolor="#AFB7BE">Code</td>
<td width="66%" align="left" valign="middle" bgcolor="#AFB7BE">Subject</td>
<td width="15%" align="left" valign="middle" bgcolor="#AFB7BE">Grade</td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">101</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">BANGLA</td>
<td align="left" valign="middle" bgcolor="#EEEEEE"><input id="bangla" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">107</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">ENGLISH</td>
<td align="left" valign="middle" bgcolor="#DEE1E4"><input id="english" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">109</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">MATHEMATICS</td>
<td align="left" valign="middle" bgcolor="#EEEEEE"><input id="math" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">150</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">BANGLADESH AND GLOBAL STUDIES</td>
<td align="left" valign="middle" bgcolor="#DEE1E4"><input id="bangladesh_history" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">112</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">HINDU RELIGION AND MORAL EDUCATION</td>
<td align="left" valign="middle" bgcolor="#EEEEEE"><input id="hindu" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">136</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">PHYSICS</td>
<td align="left" valign="middle" bgcolor="#DEE1E4"><input id="physics" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">137</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">CHEMISTRY</td>
<td align="left" valign="middle" bgcolor="#EEEEEE"><input id="chemistry" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">138</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">BIOLOGY</td>
<td align="left" valign="middle" bgcolor="#DEE1E4"><input id="biology" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">154</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">INFORMATION AND COMMUNICATION TECHNOLOGY</td>
<td align="left" valign="middle" bgcolor="#EEEEEE"><input id="ict" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">134</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">AGRICULTURE STUDIES</td>
<td align="left" valign="middle" bgcolor="#DEE1E4"><input id="agriculture" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">147</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">PHYSICAL EDUCATION, HEALTH & SPORTS</td>
<td align="left" valign="middle" bgcolor="#EEEEEE"><input id="phisical" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">156</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">CAREER EDUCATION</td>
<td align="left" valign="middle" bgcolor="#DEE1E4"><input id="carrier" type="text" placeholder="Enter Grade"></td>
</tr>
</tbody>
</table>
</td>
        `;
      } else if (data.group === "Humanity") {
        console.log("data");
      } else if (data.group === "Commerce") {
        console.log("computer");
      }
    });
}
Fetchstudent();
