import './bootstrap';

const groupName = $("#groupName");
const groupAvail = $("#groupAvail");

const submit = $("#submit");

var tGroupAvail = false;

async function groupIsAvail () {
    if (groupName.val() == "") {
      return false;
    }
  
    try {
      const response = await axios.get('/groupAvail/' + groupName.val());
      // handle success
      return response.data.groupAvail;
    } catch (error) {
      // handle error
      return false;
    }
}

groupName.on("change", async function () {
    if (await groupIsAvail()) {
      groupAvail.html("Group name is available ✅");
      tGroupAvail = true;
    } else {
      groupAvail.html("Group name is not available ❌");
      tGroupAvail = false;
    }

    checkAllValid();
})

function checkAllValid () {
    if (tGroupAvail) {
      submit.prop("disabled", false);
    } else {
      submit.prop("disabled", true);
    }
  }
  