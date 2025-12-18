// Grained Background Effect
// Creates a texture/grain effect on the canvas

document.addEventListener('DOMContentLoaded', function() {
    const canvas = document.getElementById('grained-bg');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    let animationId;
    let grain = 0.5; // Reduced from 0.5 to make it lighter
    let patternSize = 200;
    let patternScaleX = 1;
    let patternScaleY = 1;
    let patternRefreshInterval = 3;
    let patternPixelDataLength = patternSize * patternSize * 4;

    function setCanvasSize() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }

    function createPattern() {
        const patternCanvas = document.createElement('canvas');
        patternCanvas.width = patternSize;
        patternCanvas.height = patternSize;
        const patternCtx = patternCanvas.getContext('2d');
        const patternData = patternCtx.createImageData(patternSize, patternSize);
        const patternPixelData = patternData.data;

        for (let i = 0; i < patternPixelDataLength; i += 4) {
            // Create lighter grain effect with reduced opacity and lighter values
            const randomValue = Math.random();
            const value = randomValue < grain ? (128 + Math.random() * 50) | 0 : 255; // Lighter base with subtle variation
            const alpha = randomValue < grain ? (20 + Math.random() * 30) | 0 : 0; // Lower opacity for lighter effect
            
            patternPixelData[i] = value;
            patternPixelData[i + 1] = value;
            patternPixelData[i + 2] = value;
            patternPixelData[i + 3] = alpha; // Use alpha for lighter effect
        }

        patternCtx.putImageData(patternData, 0, 0);
        return patternCanvas;
    }

    function drawPattern() {
        const pattern = createPattern();
        const patternTexture = ctx.createPattern(pattern, 'repeat');
        // Use globalAlpha to make the overall effect lighter
        ctx.globalAlpha = 0.7; // Reduced opacity for lighter grain
        ctx.fillStyle = patternTexture;
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        ctx.globalAlpha = 4.0; // Reset alpha
    }

    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        drawPattern();
        animationId = requestAnimationFrame(animate);
    }

    function init() {
        setCanvasSize();
        drawPattern();
        animate();
    }

    function handleResize() {
        setCanvasSize();
    }

    window.addEventListener('resize', handleResize);
    init();

    // Cleanup on page unload
    window.addEventListener('beforeunload', function() {
        if (animationId) {
            cancelAnimationFrame(animationId);
        }
    });
});
