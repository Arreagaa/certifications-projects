import { useEffect, useState } from "react";

const FollowMouse = () => {
  const [enable, setEnable] = useState(false);
  const [position, setPosition] = useState({ x: 0, y: 0 });

  // pointermove
  useEffect(() => {
    console.log("effect", { enable });

    const handleMove = (event) => {
      const { clientX, clientY } = event;
      console.log("handleMove", { clientX, clientY });
      setPosition({ x: clientX, y: clientY });
    };

    if (enable) {
      window.addEventListener("pointermove", handleMove);
    }

    // cleanup
    // cuando se desmonta el componente
    // cuando cambian las dependencias, antes de ejecutar el efecto de nuevo
    return () => {
      console.log("cleanup");
      window.removeEventListener("pointermove", handleMove);
    };
  }, [enable]);

  // [] -> solo se ejecuta una vez cuando se monta el componente
  // [enabled] -> se ejecuta cuando cambia enabled y cuando se monta el componente
  // undefined -> se ejecuta cada vez que se renderiza el componente

  // change body className
  useEffect(() => {
    document.body.classList.toggle("no-cursor", enable);

    return () => {
      document.body.classList.remove("no-cursor");
    };
  }, [enable]);

  return (
    <>
      <div
        style={{
          position: "absolute",
          backgroundColor: "rgba(0, 0, 0, 0.5)",
          border: "1px solid #fff",
          borderRadius: "50%",
          opacity: 0.8,
          pointerEvents: "none",
          left: -25,
          top: -25,
          width: 50,
          height: 50,
          transform: `translate(${position.x}px, ${position.y}px)`,
        }}
      />
      <button onClick={() => setEnable(!enable)}>
        {enable ? "Desactivar" : "Activar"} seguir puntero
      </button>
    </>
  );
};

function App() {
  return (
    <main>
      <FollowMouse />
    </main>
  );
}

export default App;
