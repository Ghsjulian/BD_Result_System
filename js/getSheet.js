var formData = new FormData();
formData.append("ein","")
formData.append("roll","")
formData.append("regi","")
formData.append("password","")

fetch(`http://localhost:8000/Bd_Result/API/server/functions/getSheet.php`, {
      method: "POST",
      body: formData,
    })
      .then((res) => {
        return res.text();
      })
      .then((data) => {
        console.log(data)
      });
      