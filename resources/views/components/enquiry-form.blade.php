<form class="fw-bolder" method="POST" action="{{ route('enquiry.store') }}" >
                            @csrf 

                            <div class="row row-cols-lg-2 row-cols-1">
                                
                            <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control text-capitalize" id="name" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control text-lowercase" id="email" name="email" placeholder="Your Email" required>
                </div>

                               
                                <div class="mb-3 col">
                                    <label class="form-label ">Phone Number <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile Number" required>
                                    </div>

                                
                                <div class="mb-3 col">
                                    <label class="form-label "> Type of enquiry <span class="text-danger">*</span></label>
<select class="form-control text-capitalize" name="typeofenquiry" id="endDate" required>
  <option value="Business Visa">Business Visa</option>
  <option value="Student Visa">Student Visa</option>
</select>
                                </div>

                           

                               
                               
                                

                            </div>
                            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control text-capitalize" id="message" name="message" rows="3" placeholder="Your Message" required></textarea>
            </div>
                            <div class="d-flex justify-content-end gap-3 mb-3 mt-5">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
</div>
                        
                          
                        </form>