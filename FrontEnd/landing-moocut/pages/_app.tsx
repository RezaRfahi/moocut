import "@/styles/.global/index.scss";
import type { AppProps } from 'next/app'
import Layout from '@/components/layout/Layout.jsx'

const App = ({ Component, pageProps }: AppProps) => {
  return (
    <Layout>
      <Component {...pageProps} />
    </Layout>
  )
}

export default App;