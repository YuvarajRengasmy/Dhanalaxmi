<form class="fw-bolder" method="POST" >
                            @csrf 

                            <div class="row row-cols-lg-2 row-cols-1">
                                
                                <div class="mb-3 col">
                                    <label for="title" class="form-label text-secondary">Name <span class="text-danger">*</span></label>
                                    <input type="text" name="title" placeholder="Ex::Dhanalaxmi" class="form-control" id="title" required>
                                </div>

                               
                                <div class="mb-3 col">
                                    <label for="companyName" class="form-label text-secondary">Email <span class="text-danger">*</span></label>
                                    <input type="text" name="companyName" placeholder="Ex::dhanalaxmifinovo.com" class="form-control" id="companyName" required>
                                </div>

                               
                                <div class="mb-3 col">
                                    <label class="form-label text-secondary">Phone Number <span class="text-danger">*</span></label>
                                    <input type="text" name="startDate" placeholder="Ex::9876543210" class="form-control" id="startDate" required>
                                </div>

                                
                                <div class="mb-3 col">
                                    <label class="form-label text-secondary">Visa Type <span class="text-danger">*</span></label>
<select class="form-control" name="endDate" id="endDate" required>
  <option value="Business Visa">Business Visa</option>
  <option value="Student Visa">Student Visa</option>
</select>
                                </div>

                           

                               
                               
                                

                            </div>
                            <div class="mb-3 w-100">
                                    <label for="skills" class="form-label text-secondary">Message <span class="text-danger">*</span></label>
                                    <textarea type="text" name="skills" placeholder="Ex: Welcome To Dhanalaxmi" class="form-control w-100" id="skills" required></textarea>
                                </div>
                            <div class="d-flex justify-content-end gap-3 mb-3 mt-5">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
</div>
                        
                          
                        </form>