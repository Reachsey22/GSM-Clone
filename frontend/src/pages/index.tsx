import type { InferGetStaticPropsType, GetStaticProps } from 'next';

// Define a type for our Brand data
type Brand = {
  id: number;
  name: string;
  slug: string;
};

// This function runs on the server to fetch data before the page is built
export const getStaticProps = (async () => {
  try {
    const res = await fetch(`${process.env.NEXT_PUBLIC_API_URL}/brands`);
    if (!res.ok) {
      throw new Error(`API request failed with status ${res.status}`);
    }
    const brands: Brand[] = await res.json();
    return { props: { brands } };
  } catch (error) {
    console.error("Failed to fetch brands:", error);
    return { props: { brands: [] } }; // Return empty array on error
  }
}) satisfies GetStaticProps<{ brands: Brand[] }>;


// This is the main React component for the page
export default function HomePage({ brands }: InferGetStaticPropsType<typeof getStaticProps>) {
  return (
      <main className="container mx-auto p-8">
        <h1 className="text-4xl font-bold mb-6">Phone Brands</h1>

        {brands.length > 0 ? (
            <ul className="list-disc list-inside space-y-2">
              {brands.map((brand) => (
                  <li key={brand.id} className="text-xl">
                    {brand.name}
                  </li>
              ))}
            </ul>
        ) : (
            <p className="text-red-500">Could not load brands. Please ensure the backend server is running and the API is working.</p>
        )}
      </main>
  );
}