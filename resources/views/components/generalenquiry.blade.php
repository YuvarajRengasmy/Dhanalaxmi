<form method="POST" action="{{ route('inquiry.store') }}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control text-capitalize" id="name" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control text-lowercase" id="email" name="email" placeholder="Your Email" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="mobile">Mobile Number</label>
                    <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile Number" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="visa">Select Visa Type</label>
                    <select class="form-control text-capitalize" id="visa" name="visa_type" required>
                        <option value="" disabled selected>Select Visa Type</option>
                        <option value="student">Student Visa</option>
                        <option value="work">Work Visa</option>
                        <option value="tourist">Tourist Visa</option>
                        <option value="business">Business Visa</option>
                        <option value="family">Family Visa</option>
                        <option value="visitor">Visitor Visa</option>
                        <option value="migrate">Migrate Visa</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control text-capitalize" id="message" name="message" rows="3" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Send Message</button>
        </form>