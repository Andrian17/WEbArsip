function notEmpty(elem, helperMsg) {
  //untuk vadasi form kosong
  if (elem.value.length == 0) {
    alert(helperMsg);
    elem.focus();
    return false;
  }
  return true;
}
function isNumber(elem, helperMsg) {
  //untuk input angka saja
  var numericExpression = /^[0-9]+$/;
  if (elem.value.match(numericExpression)) {
    return true;
  } else {
    alert(helperMsg);
    elem.focus();
    return false;
  }

}
function isAlphabet(elem, helperMsg) {
  var alpaExp = /^[a-zA-Z]+$/;
  if (elem.value.match(alpaExp)) {
    return true;
  } else {
    alert(helperMsg);
    elem.focus();
    return false;
  }
}

function isAlphanumeric(elem, helperMsg) {
  //hanya angkaa dan huruf
  var alpaExp = /^[0-9a-zA-Z]+$/;
  if (elem.value.match(alpaExp)) {
    return true;
  } else {
    alert(helperMsg);
    elem.focus();
    return false;
  }
}

function lengthInput(elem, min, max) {
  // input minimal dan maximal char
  var uInput = elem.value;
  if (uInput.length >= min && uInput.length <= max) {
    return true;
  } else {
    alert("Please Enter " + min + "to" + max + "chars");
    elem.focus();
    return false;
  }
}