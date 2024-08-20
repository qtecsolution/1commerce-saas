<template>
  <i
    class="fas fa-cog gear-icon"
    data-bs-toggle="modal"
    :data-bs-target="'#' + modalId"
    :title="modalTitle"
  ></i>

  <div
    class="modal fade"
    :id="modalId"
    tabindex="-1"
    :aria-labelledby="modalId + 'Label'"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" :id="modalId + 'Label'">
            {{ modalTitle }}
          </h1>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <button
              type="button"
              class="flex justify-end ml-2 rounded-md border btn btn-success"
              @click="addMore()"
            >
              Add More
            </button>
            <div v-for="(testimonial, index) in testimonials" :key="index">
              <div class="flex justify-start ml-2 mt-4">
                <input
                  v-model="testimonial.review"
                  placeholder="Enter Customer Review"
                  class="w-full py-2 border border-indigo-500 rounded"
                />
                <input
                  v-model="testimonial.reviewer_name"
                  placeholder="Enter Reviewer Name"
                  class="w-full py-2 border border-indigo-500 rounded"
                />
                <!-- <input
                  type="file"
                  @change="handleFileChange($event, index)"
                  class="w-full py-2 border border-indigo-500 rounded"
                /> -->
                <button
                  type="button"
                  class="btn btn-danger"
                  @click="remove(index)"
                  v-show="index != 0"
                >
                  <i class="fas fa-trash"></i>
                  Remove
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            Close
          </button>
          <button type="button" class="btn btn-dark" @click="saveChanges">
            Save changes
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["modalId", "modalTitle", "buttonData"],
  data() {
    return {
      testimonials: [
        {
          review: "",
          reviewer_name: "",
          reviewer_image: "",
        },
      ],
    };
  },
  emits: ["update"],
  methods: {
    addMore() {
      this.testimonials.push({
        review: "",
        reviewer_name: "",
        // reviewer_image: "",
      });
    },
    remove(index) {
      this.testimonials.splice(index, 1);
    },
    handleFileChange(event, index) {
      const file = event.target.files[0];
      if (file) {
        this.$set(this.testimonials, index, {
          ...this.testimonials[index],
          reviewer_image: file,
        });
      }
    },
    saveChanges() {
      this.$emit("update", this.testimonials);
      const modalElement = document.getElementById(this.modalId);
      const modal = bootstrap.Modal.getInstance(modalElement);
      if (modal) {
        modal.hide();
      }
    },
  },
};
</script>

<style scoped>
.gear-icon {
  position: absolute;
  margin-top: -12px;
  margin-left: 2px;
  background: #0d6efd;
  color: #ffffff;
  padding: 5px;
  border-radius: 50%;
  cursor: pointer;
  transition: box-shadow 0.3s ease;
}

.gear-icon:hover {
  box-shadow: 0 4px 8px rgba(135, 135, 135, 0.6),
    0 6px 20px rgba(145, 145, 145, 0.5);
}
</style>
