let handleContactUsSubmission = async (e) => {
  let data = {}
  let fields = document.getElementsByClassName('contact-us-field');
  for(var i = 0; i < fields.length; i++) data[fields[i].getAttribute('name')] = fields[i].value
  console.log(data)
  let res = await fetch('functions/handleContactForm.php', {
    method: 'POST',
    mode: 'cors',
    cache: 'no-cache',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(data) // body data type must match "Content-Type" header
  })
  let response = await res.json()
  if(response.error) {
    alert('Sorry. There has been a problem submitting the form. Please try again.')
  }else{
    alert('Thank you for contacting us! Chef John will reach out to you soon.')
    let modal = bootstrap.Modal.getInstance(document.getElementById('contact-us-modal'))
    modal.hide()
    for(var i = 0; i < fields.length; i++) fields[i].value = ''
  }
}
