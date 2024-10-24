<form method='POST'>
@csrf 
        <div class="row g-4 p-4 p-lg-5">
      

          <!-- Full Name -->
          <div class="col-12 col-md-6">
            <label for="fullname" class="form-label">Full Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control text-capitalize" id="fullname" name="fullname" value="" required>
          </div>

          <!-- Email -->
          <div class="col-12 col-md-6">
            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
            <div class="input-group">
             
              <input type="email" class="form-control text-lowercase" id="email" name="email" value="" required>
            </div>
          </div>

          <!-- Phone Number -->
          <div class="col-12 col-md-6">
            <label for="phone" class="form-label">Phone Number</label>
            <div class="input-group">
             
              <input type="tel" class="form-control" id="phone" name="phone" value="">
            </div>
          </div>

          <!-- Subject -->
          <div class="col-12 col-md-6">
            <label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
            <input type="text" class="form-control text-capitalize" id="subject" name="subject" value="" required>
          </div>

          <!-- Message -->
          <div class="col-12">
            <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
            <textarea class="form-control text-capitalize" id="message" name="message" rows="3" required></textarea>
          </div>

          <!-- Submit Button -->
          <div class="col-12">
            <div class="d-grid">
              <button class="btn btn-primary " type="submit">Send Message</button>
            </div>
          </div>
        </div>
      </form>