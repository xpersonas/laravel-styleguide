/**
 * @file
 * Simple styleguide javascript.
 *
 */

const viewSourceLinks = document.querySelectorAll(
    '.simple-styleguide--view-sourecode'
);

[].forEach.call(viewSourceLinks, el => {
    el.addEventListener('click', () => {
        el.nextElementSibling.classList.toggle('active');
    });
});

const calculableElements = document.querySelectorAll('.calculate');

[].forEach.call(calculableElements, el => {
    const measuredElement = el.querySelector('.measure');
    const info = el.querySelector('.info');
    const lineHeight = `<label>line-height:</label> ${
        window.getComputedStyle(measuredElement).lineHeight
    }`;
    const fontSize = `<label>font-size:</label> ${
        window.getComputedStyle(measuredElement).fontSize
    }`;
    const margins = `<label>margin:</label> ${
        window.getComputedStyle(measuredElement).marginBottom
    }
        ${window.getComputedStyle(measuredElement).marginRight} ${
        window.getComputedStyle(measuredElement).marginBottom
    } ${window.getComputedStyle(measuredElement).marginLeft}`;

    info.innerHTML = `${fontSize}<br/>${lineHeight}<br/>${margins}`;
});

