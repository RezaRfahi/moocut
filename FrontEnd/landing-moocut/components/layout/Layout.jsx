import styles from "./Layout.module.scss"
import { ToastContainer } from "react-toastify";

const Layout = ({ children }) => {
    return (
        <>
            <div className={styles["main"]}>
                <p className="text-sm">asdasdasd</p>
            </div>
            <ToastContainer
                position="top-right"
                autoClose={3000}
                hideProgressBar={false}
                newestOnTop
                closeOnClick
                rtl={false}
                pauseOnFocusLoss
                draggable
                pauseOnHover
                theme="dark"
            />
        </>
    )
}

export default Layout;