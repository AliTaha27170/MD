@extends('app')
@section("main")
<div class="Contact-container" id="">
  <div class="content">
    <div class="left-side">
      <div class="address details">
        <i class="fas fa-map-marker-alt"></i>
        <div class="topic">Address</div>
        <div class="text-one"> 6464-D General Green Way, Alexandria VA 22312-2413 </div>
      </div>
      <div class="phone details">
        <i class="fas fa-phone-alt"></i>
        <div class="topic">Phone</div>
        <div class="text-one"> (703) 354-8484 </div>
      </div>
      <div class="Fax details">
      <i class="fas fa-fax"></i>
        <div class="topic">Fax</div>
        <div class="text-one"> (703) 354-0277 </div>
      </div>
      <div class="email details">
        <i class="fas fa-envelope"></i>
        <div class="topic">Email</div>
        <div class="text-one">info@mdgoods.com</div>
      </div>
    </div>
    <div class="right-side">
      <div class="topic-text">Send us a message</div>
      <p>If you have any Question , you can send us message from here.<br> It's our pleasure to help you.</p>
      <form action="#" method="POST" action="">
        <div class="input-box">
          <input type="text" placeholder="name" name="name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="company" name="company">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Address" name="address">
        </div>
        <div class="input-box">
          <input type="city" placeholder="City" name="city">
        </div>
        <div class="input-box">
          <input type="text" placeholder="State" name="state">
        </div>
        <div class="input-box">
          <input type="number" placeholder="Zip Code" name="zip">
        </div>
        <div class="input-box">
          <input type="number" placeholder="Phone" name="phone">
        </div>
        <div class="input-box">
          <input type="email" placeholder="Email" name="eamil">
        </div>
        <div class="input-box message-box">
           <textarea name="message" value="message" id="message" class="form-control" rows="3" placeholder="Your Message" required></textarea>
        </div>
        <div class="button">
          <input type="submit" value="Send Now" >
        </div>
      </form>
    </div>
  </div>
</div>
<!-- map -->
<div class="Contact-container"style="padding: 10px;">
<div class="google-maps">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3109.551008362233!2d-77.16589338465259!3d38.796926179586265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b2933285a2f9%3A0x8365c04e100e043e!2s6464%20General%20Green%20Way%20d%2C%20Alexandria%2C%20VA%2022312%2C%20USA!5e0!3m2!1sen!2s!4v1648455092453!5m2!1sen!2s"frameborder="0" style="border:0; width:100%" allowfullscreen=""></iframe>
 </div>
</div>

@stop
