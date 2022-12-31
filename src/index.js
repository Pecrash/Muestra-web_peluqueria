const slider = document.querySelector('.secServices__content')
const next = document.querySelector('.right')
const prev = document.querySelector('.left')

prev.addEventListener('click', () => {
    slider.scrollLeft -= 200
})

next.addEventListener('click', () => {
    slider.scrollLeft += 200
})